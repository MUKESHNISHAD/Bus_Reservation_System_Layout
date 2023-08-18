<?php
  include 'database.php';
  if(isset($_POST['from'])&&isset($_POST['to'])){
     $r=query("select Bus_number from Bus_details where source ='{$_POST['from']}' and  destination='{$_POST['to']}'",'bus');
  if($r->num_rows>0){
        echo '1';
     }
     else{
        echo '0';
     }
  }
?>