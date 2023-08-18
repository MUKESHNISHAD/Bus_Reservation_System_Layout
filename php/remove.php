<?php
  include 'database.php';
  if(isset($_POST['busnumber'])){
    $r=query("delete from  bus_details where binary bus_number='{$_POST['busnumber']}'",'bus');
    if($r==true){
        echo '1';
    }
    else{
        echo '0';
    }
  }
?>