<?php
function query($query,$database){
    $con = new mysqli('localhost','root','',$database);
    $r=$con->query($query);
    $con->close();
    return $r;
}
function isuser($username,$password){
      $r=query("select userid from users where binary username='{$username}' and password='{$password}' ","bus1");
      if($r->num_rows==1){
        return 1;
      }
      else{
        return 0;
      }
}

function user($username){
  $r=query("select userid from users where binary username='{$username}'","bus1");
  if($r->num_rows==1){
    $r=$r->fetch_assoc();
    return $r['id'];
  }
  else{
    return null;
  }
}

function isAdmin($username,$password){
  $r=query("select * from admin where binary username='{$username}'and password='{$password}'","bus1");
  if($r->num_rows==1){
   return 1;
  }
  else{
    return 0;
  }
}
?>