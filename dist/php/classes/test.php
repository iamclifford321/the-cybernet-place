<?php
/**
 *
 */
 include 'config.php';

class checkForNotify extends Config
{

  function __construct()
  {

    $dateModified = new DateTime('NOW', new DateTimeZone('Asia/Manila'));
    $data = [
        'sub_name' => 'Test',
        'sub_description' => 'Test',
        'amount' => '234',
        'last_modified' => $dateModified->format('Y-m-d H:i:sP')
    ];
    $sql = "INSERT into subs_detail (sub_name, sub_description, amount, last_modified ) VALUES ( :sub_name, :sub_description, :amount, :last_modified )";
    $stmt = $this->connect()->prepare( $sql );
    $stmt->execute( $data );
  }
}

 $test = new checkForNotify();
 ?>
