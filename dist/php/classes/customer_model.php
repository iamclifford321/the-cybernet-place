<?php
    class customer_model extends config{
        protected function getTheCustomersMdl(){

            $sql = "SELECT * from customers Order by last_modified DESC";
            $stmt = $this->connect()->prepare( $sql );
            $stmt->execute();
            $customers = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $customers;

        }
        protected function getAlltheSubsMdl(){

            $sql = "SELECT * from subs_detail Order by last_modified DESC";
            $stmt = $this->connect()->prepare( $sql );
            $stmt->execute();
            $subsData = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $subsData;

        }
        protected function saveSubsMdl( $sub_id, $Subs_name, $Subs_price, $Subs_description ){

            $sql = "SELECT * from subs_detail Where Id ='$sub_id'";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $subs = $stmt->fetchAll( PDO::FETCH_ASSOC );
            $dateModified = new DateTime('NOW', new DateTimeZone('Asia/Manila'));
            if( count($subs) ){
                // update
                $data = [

                    'sub_name' => $Subs_name,
                    'sub_description' => $Subs_description,
                    'amount' => $Subs_price,
                    'last_modified' => $dateModified->format('Y-m-d H:i:sP'),
                    'sub_id' => $sub_id,
                ];

                $sql = "UPDATE
                            subs_detail
                        set
                            sub_name =:sub_name,
                            sub_description =:sub_description,
                            amount =:amount,
                            last_modified =:last_modified
                        Where
                            Id =:sub_id";

                $stmt = $this->connect()->prepare( $sql );
                if( $stmt->execute( $data ) ){
                    return [
                        'status' => 'success',
                        'msg' => 'The Subscription details are now updated'
                    ];
                }else{
                    return [
                        'status' => 'error',
                        'msg' => 'Something went wrong, contact the developer!'
                    ];
                }

            }else{
                // insert
                $data = [
                    'sub_name' => $Subs_name,
                    'sub_description' => $Subs_description,
                    'amount' => $Subs_price,
                    'last_modified' => $dateModified->format('Y-m-d H:i:sP')
                ];
                $sql = "INSERT into subs_detail (sub_name, sub_description, amount, last_modified ) VALUES ( :sub_name, :sub_description, :amount, :last_modified )";
                $stmt = $this->connect()->prepare( $sql );
                if( $stmt->execute( $data ) ){
                    return [
                        'status' => 'success',
                        'msg' => 'The Subscription details are now updated'
                    ];
                }else{
                    return [
                        'status' => 'error',
                        'msg' => 'Something went wrong, contact the developer!'
                    ];
                }
            }
        }
        protected function deleteSubsMdl( $sub_id ){
            $sql = "DELETE from subs_detail Where Id='$sub_id'";
            $stmt = $this->connect()->prepare( $sql );
            if($stmt->execute()){
                return [
                    'status' => 'success',
                    'msg' => 'customer information successfully deleted'
                ];
            }else{
                return [
                    'status' => 'error',
                    'msg' => 'Something went wrong, contact the developer!'
                ];
            }
        }
        protected function getThesubsForDropMdl(){

            $sql = "SELECT * from subs_detail Order by last_modified DESC";
            $stmt = $this->connect()->prepare( $sql );
            $stmt->execute();
            $subsData = $stmt->fetchAll( PDO::FETCH_ASSOC );
            $dataForPrice = [

            ];
            foreach($subsData  as $subsValue){
                $dataForPrice[$subsValue['Id']] = $subsValue['amount'];
            }

            return [
                'dataFor' => $subsData,
                'dataForPrice' => $dataForPrice
            ] ;

        }
        protected function deleteCustomerMdl( $id ){

            $sql = "DELETE from customers Where Id='$id'";
            $stmt = $this->connect()->prepare( $sql );
            if($stmt->execute()){
                return [
                    'status' => 'success',
                    'msg' => 'customer information successfully deleted'
                ];
            }else{
                return [
                    'status' => 'error',
                    'msg' => 'Something went wrong, contact the developer!'
                ];
            }


        }
        protected function saveCustomerMdl( $firstname, $lastname, $email, $phone, $street, $barangay, $municipality, $province, $cus_id ){

            $sql = "SELECT * from customers Where Id ='$cus_id'";
            $stmt = $this->connect()->prepare( $sql );
            $stmt->execute();
            $customers = $stmt->fetchAll( PDO::FETCH_ASSOC );
            $dateStarted = new DateTime('NOW', new DateTimeZone('Asia/Manila'));
            if( count($customers) ){
                $data = [
                    'first_name' => $firstname,
                    'last_name' => $lastname,
                    'phone_number' => $phone,
                    'street' => $street,
                    'email' => $email,
                    'last_modified' => $dateStarted->format('Y-m-d H:i:sP'),
                    'barangay' => $barangay,
                    'municipality' => $municipality,
                    'province' => $province,
                    'Id' => $cus_id
                ];
                // Update here
                $sql = "UPDATE
                            customers
                        set
                            first_name =:first_name,
                            last_name =:last_name,
                            phone_number =:phone_number,
                            street =:street,
                            email =:email,
                            last_modified =:last_modified,
                            barangay =:barangay,
                            municipality =:municipality,
                            province =:province
                        Where
                            Id =:Id";

                $stmt = $this->connect()->prepare( $sql );
                if( $stmt->execute( $data ) ){
                    return [
                        'status' => 'success',
                        'msg' => 'The Customer details are now updated'
                    ];
                }else{
                    return [
                        'status' => 'error',
                        'msg' => 'Something went wrong, contact the developer!'
                    ];
                }

            }else{

                $dateStarted = new DateTime('NOW', new DateTimeZone('Asia/Manila'));

                $nextPayment = date_add($dateStarted ,date_interval_create_from_date_string("+1 month"));
                $dateFinal = $dateStarted->format('Y-m-d H:i:sP');
                $cus_id_toUse = rand( 1, 1000 ) . time();
                $data1 = [
                    'customer_id' => $cus_id_toUse,
                    'first_name' => $firstname,
                    'last_name' => $lastname,
                    'phone_number' => $phone,
                    'street' => $street,
                    'email' => $email,
                    'last_modified' => $dateStarted->format('Y-m-d H:i:sP'),
                    'barangay' => $barangay,
                    'municipality' => $municipality,
                    'province' => $province,
                    'next_payment' => $nextPayment->format('Y-m-d')
                ];

                // Insert Here
                $sql = "INSERT
                        into
                            customers
                            (
                                customer_id,
                                first_name,
                                last_name,
                                phone_number,
                                street,
                                email,
                                last_modified,
                                barangay,
                                municipality,
                                province,
                                next_payment
                            )
                        Values
                            (
                                :customer_id,
                                :first_name,
                                :last_name,
                                :phone_number,
                                :street,
                                :email,
                                :last_modified,
                                :barangay,
                                :municipality,
                                :province,
                                :next_payment
                            )";

                $stmt = $this->connect()->prepare( $sql );
                if( $stmt->execute( $data1 ) ){

                  return [
                      'status' => 'success',
                      'msg' => 'The Customer details are now saved successfully'
                  ];

                }else{

                    return [
                        'status' => 'error',
                        'msg' => 'Something went wrong, contact the developer!'
                    ];

                }
        }
            // return $customers;

        }
        protected function payTheSubsciptionMdl( $idFor, $amountFor, $status ){
          $dateToday = new DateTime('NOW', new DateTimeZone('Asia/Manila'));
          $newDate = $dateToday->format('Y-m-d');

            $data = [
              'Id' => explode(',', $idFor)[0],
              'status_bill' => $status,
              'paid' => $newDate,
              'amount_paid' => $amountFor
            ];
            var_dump($data);
            $sql = 'UPDATE payment SET status_bill =:status_bill, paid=:paid, amount_paid =:amount_paid WHERE id =:Id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute( $data );


            $dateNext = date_add($dateToday ,date_interval_create_from_date_string("+1 month"));

            $data = [
              'customer_id' => explode(',', $idFor)[1],
              'next_payment' => $dateNext->format('Y-m-d')
            ];
            $sql = 'UPDATE customers SET next_payment =:next_payment WHERE customer_id =:customer_id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute( $data );

        }
        protected function checkForNotifyMdl(){
          $dateNow = new DateTime('NOW', new DateTimeZone('Asia/Manila'));
          $dateP = $dateNow->format('Y-m-d');

          $sql = "SELECT * from customers Where next_payment = '$dateP'";
          $stmt = $this->connect()->prepare( $sql );
          $stmt->execute();
          $customers = $stmt->fetchAll( PDO::FETCH_ASSOC );

          if ( count($customers) ) {
            $isDefault = '1';
            $sql = "SELECT * from subs_detail Where isDefault = '$isDefault'";
            $stmt = $this->connect()->prepare( $sql );
            $stmt->execute();
            $subs_detail = $stmt->fetchAll( PDO::FETCH_ASSOC );
            // var_dump($subs_detail);

            foreach ($customers as $key => $val) {

              $data = [
                'customer_id' => $val['customer_id'],
                'subs_details_id' => $subs_detail[0]['Id'],
                'amount' => $subs_detail[0]['amount']
              ];

              $sql = "INSERT into payment (customer_id, subs_details_id, amount) VALUES ( :customer_id, :subs_details_id, :amount)";
              $stmt = $this->connect()->prepare( $sql );
              if ($stmt->execute( $data )) {
                $data = [
                  'customer_id' => $val['customer_id'],
                  'msg' => '\'s bill for his internet subscription due today'
                ];

                $sql = "INSERT into notify ( customer_id, msg) VALUES ( :customer_id, :msg )";
                $stmt = $this->connect()->prepare( $sql );
                if ($stmt->execute( $data )) {
                  echo "Text Here";
                }
              }
            }

          }
          // var_dump( $customers );
        }
        protected function getTheNotifMdl(){
          $sql = "SELECT *, notify.Id from notify inner join customers on notify.customer_id = customers.customer_id Order by date_created DESC";
          $stmt = $this->connect()->prepare( $sql );
          $stmt->execute();
          $notifications = $stmt->fetchAll( PDO::FETCH_ASSOC );
          return $notifications;
        }

        protected function setTheNotifMdl( $idsTobe ){
          $isFinish = true;
          foreach (explode(',', $idsTobe) as $key => $val) {
            $sql = "UPDATE notify set isNoticed = 1 Where Id = '$val'";
            $stmt = $this->connect()->prepare($sql);
            if (!$stmt->execute()) {
              $isFinish = false;
            }

          }

          if ($isFinish) {
            return [
                'status' => 'success',
                'msg' => 'Updated'
            ];
          }

          return [
              'status' => 'error',
              'msg' => 'Something went wrong, contact the developer!'
          ];

        }
        protected function getTheTransactionMdl( $customer_id, $filtered ){
          $sql = '';
          if ( $filtered  == 'none') {
            $sql = "SELECT * from payment WHERE customer_id = '$customer_id' ";
          }else{
            $sql = "SELECT * from payment WHERE customer_id = '$customer_id' AND status_bill = '$filtered'";
          }
          $stmt = $this->connect()->prepare($sql);
          $transactions;
          if ($stmt->execute()) {
            $transactions = $stmt->fetchAll( PDO::FETCH_ASSOC );

          }

          $sql = "SELECT * from customers WHERE customer_id = '$customer_id'";
          $stmt = $this->connect()->prepare($sql);
          $customers;
          if ($stmt->execute()) {
            $customers = $stmt->fetchAll( PDO::FETCH_ASSOC );
          }

          return [
            'customer_details' => $customers,
            'customer_trasactions' => $transactions
          ];
        }
    }
