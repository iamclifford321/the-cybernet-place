<?php
    class user_controller extends user_model{
        public function __construct() {

        }
        public function loginUser($user, $pass){

            $users = $this->submitCred($user, sha1($pass));

            if(count($users)){
                session_start();
                $_SESSION['user_id'] = $users[0]['user_id'];
                $_SESSION['fullname'] = $users[0]['first_name'] .' ' . $users[0]['last_name'];
                header("location:../../../index.php");
            }else{
                header("location:../../../login.php?error=Invalid username or password");
            }

        }
        public function getUsersCtrl(){
          $users = $this->getUsersMdl();
          return $users;
        }

        public function saveUsersCtrl( $user_id , $firstname, $lastname, $email, $password, $username ){
          $rspn = $this->saveUsersMdll( $user_id , $firstname, $lastname, $email, $password, $username );
          return $rspn;
        }

        public function deleteUsersCtrl( $user_id ){
          $rspn = $this->deleteUsersMdll( $user_id );
          return $rspn;
        }
    }
