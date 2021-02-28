<?php
    class user_model extends Config{
        public function __construct() {

        }

        protected function submitCred( $user, $pass ){
            // echo $user . ' | ' . $pass;

            $data = [
                'user' => $user,
                'pass' => $pass
            ];
            $sql = "SELECT * from users Where user_name =:user AND password =:pass";

            $stmt = $this->connect()->prepare( $sql );
            $stmt->execute( $data );
            $users = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $users;
        }

        protected function getUsersMdl(){
          $sql = "SELECT * from users";

          $stmt = $this->connect()->prepare( $sql );
          $stmt->execute();
          $users = $stmt->fetchAll( PDO::FETCH_ASSOC );
          return $users;
        }

        protected function saveUsersMdll( $user_id , $firstname, $lastname, $email, $password, $username ){

          if ( $user_id == '') {

            $username = $email;
            $user_ids = time() . rand(1, 1000);
            $data = [
              'user_id' => $user_ids,
              'firstname' => ucfirst($firstname),
              'lastname' => ucfirst($lastname),
              'email' => $email,
              'password' => sha1($password),
              'username' => $username
            ];

            $sql = 'INSERT into users ( user_id, first_name, last_name, password, user_name, email ) VALUES( :user_id, :firstname, :lastname, :password, :username, :email )';
            $stmt = $this->connect()->prepare( $sql );
            if ($stmt->execute( $data )) {
              return [
                'status' => 'Success',
                'msg' => 'Record inserted'
              ];
            }else{
              return [
                'status' => 'error',
                'msg' => 'Error occured please contact the developer!'
              ];
            }

          }else{

            $data = [
              'user_id' => $user_id,
              'firstname' => ucfirst($firstname),
              'lastname' => ucfirst($lastname),
              'email' => $email,
              'username' => $username
            ];

            $sql = 'UPDATE users set first_name =:firstname, last_name =:lastname, user_name =:username, email =:email WHERE Id =:user_id';
            $stmt = $this->connect()->prepare( $sql );
            if ($stmt->execute( $data )) {
              return [
                'status' => 'Success',
                'msg' => 'Record updated'
              ];
            }else{
              return [
                'status' => 'error',
                'msg' => 'Error occured please contact the developer!'
              ];
            }

          }

        }
        protected function deleteUsersMdll( $user_id ){
          $sql = "DELETE from users WHERE Id = '$user_id'";
          $stmt = $this->connect()->prepare( $sql );
          if ($stmt->execute( )) {
            return [
              'status' => 'Success',
              'msg' => 'deleted updated'
            ];
          }else{
            return [
              'status' => 'error',
              'msg' => 'Error occured please contact the developer!'
            ];
          }
        }
    }
