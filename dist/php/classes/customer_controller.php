<?php
    class customer_controller extends customer_model{
        public function getTheCustomersCtrl(){
            $customers = $this->getTheCustomersMdl();
            return $customers;
        }
        public function saveCustomerCtrl( $firstname, $lastname, $email, $phone, $street, $barangay, $municipality, $province, $cus_id ){
            $rspn = $this->saveCustomerMdl( $firstname, $lastname, $email, $phone, $street, $barangay, $municipality, $province, $cus_id );
            return $rspn;
        }
        public function deleteCustomerCtrl( $cus_id ){
            $rspn = $this->deleteCustomerMdl( $cus_id );
            return $rspn;
        }
        public function getAlltheSubsCtrl(){
            $subs = $this->getAlltheSubsMdl();
            return $subs;
        }
        public function saveSubsCtrl( $sub_id, $Subs_name, $Subs_price, $Subs_description ){
            $rspn = $this->saveSubsMdl( $sub_id, $Subs_name, $Subs_price, $Subs_description );
            return $rspn;
        }

        public function deleteSubsCtrl( $sub_id ){
            $rspn = $this->deleteSubsMdl( $sub_id );
            return $rspn;
        }

        public function getThesubsForDropCtrl(){
            $rspn = $this->getThesubsForDropMdl();
            return $rspn;
        }
        public function payTheSubsciptionCtrl( $idFor, $amountFor,$status ){
            $rspn = $this->payTheSubsciptionMdl( $idFor, $amountFor, $status );
            return $rspn;
        }
        public function checkForNotifyCtrl(){
          $rspn = $this->checkForNotifyMdl();
        }
        public function getTheNotifCtrl(){
          $rspn = $this->getTheNotifMdl();
          return $rspn;
        }

        public function setTheNotifCtrl($idsTobe){
          $rspn = $this->setTheNotifMdl($idsTobe);
          return $rspn;
        }

        public function getTheTransactionCtrl( $customer_id, $filtered ){
          $rspn = $this->getTheTransactionMdl( $customer_id, $filtered );
          return $rspn;
        }

    }
