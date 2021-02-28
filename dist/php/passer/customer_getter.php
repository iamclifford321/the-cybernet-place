<?php
    require_once '../loader.php';
    if( isset($_POST['action']) ){
        if( $_POST['action'] == 'getTheCustomers'){
            $customerController = new customer_controller();
            echo json_encode( $customerController->getTheCustomersCtrl());
        }

        if( $_POST['action'] == 'saveCustomer'){

            $firstname = ucfirst($_POST['firstname']);
            $lastname = ucfirst($_POST['lastname']);
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $street = $_POST['street'];
            $barangay = $_POST['barangay'];
            $municipality = $_POST['municipality'];
            $province = $_POST['province'];
            $cus_id = $_POST['cus_id'];
            $customerController = new customer_controller();
            echo json_encode($customerController->saveCustomerCtrl( $firstname, $lastname, $email, $phone, $street, $barangay, $municipality, $province, $cus_id ));

        }

        if( $_POST['action'] == 'deleteCustomer'){
            $cus_id = $_POST['cus_id'];
            $customerController = new customer_controller();
            echo json_encode($customerController->deleteCustomerCtrl( $cus_id ));

        }

        if( $_POST['action'] == 'getTheSubs'){
            $customerController = new customer_controller();
            echo json_encode($customerController->getAlltheSubsCtrl());
        }
        if( $_POST['action'] == 'saveSubs'){
            $sub_id = $_POST['sub_id'];
            $Subs_name = $_POST['Subs_name'];
            $Subs_price = $_POST['Subs_price'];
            $Subs_description = $_POST['Subs_description'];

            $customerController = new customer_controller();
            echo json_encode($customerController->saveSubsCtrl( $sub_id, $Subs_name, $Subs_price, $Subs_description ));

        }

        if( $_POST['action'] == 'deleteSubs'){
            $sub_id = $_POST['sub_id'];

            $customerController = new customer_controller();
            echo json_encode($customerController->deleteSubsCtrl( $sub_id ));

        }

        if( $_POST['action'] == 'getThesubsForDrop'){
            $customerController = new customer_controller();
            echo json_encode($customerController->getThesubsForDropCtrl());

        }
        if ($_POST['action'] == 'saveTransaction') {
          $idFor = $_POST['idFor'];
          $amountFor = $_POST['amountFor'];
          $status = $_POST['status'];
          $customerController = new customer_controller();
          echo json_encode($customerController->payTheSubsciptionCtrl($idFor, $amountFor, $status));
        }

        if ($_POST['action'] == 'getNotication') {

          $customerController = new customer_controller();
          echo json_encode($customerController->getTheNotifCtrl());

        }

        if ($_POST['action'] == 'setNotif') {

          $customerController = new customer_controller();
          echo json_encode($customerController->setTheNotifCtrl($_POST['idsTobe']));

        }

        if ($_POST['action'] == 'getTheTransaction') {
          $customer_id = $_POST['customer_id'];
          $filtered = $_POST['filtered'];

          $customerController = new customer_controller();
          echo json_encode($customerController->getTheTransactionCtrl( $customer_id, $filtered ));

        }

    }
