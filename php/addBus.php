<?php
include 'database.php';
   if(isset($_POST['busnumber'])&&isset($_POST['source'])&&isset($_POST['destination'])){
    $r=query("insert into bus_details(Bus_number,source,destination) value('{$_POST['busnumber']}','{$_POST['source']}','{$_POST['destination']}')","bus");
       if($r){
        echo '1';
       }
       else{
        echo '0';
       }
    }
?>