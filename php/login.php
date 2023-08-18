<?php
 include 'database.php';
echo "...........................................USER INFORMATION....................................";
$flag = 0;
if(isset($_POST['id']) && isset($_POST['pass']) )
{   $r=query("select admin from admin where binary admin='{$_POST['id']}' and binary password='{$_POST['pass']}'",'bus');
    if($r->num_rows==1){
	      echo "<script>  
          window.location.replace('../html/admin.html');
       </script>";
	   exit();
	}
	
	echo "ise";
    $conn = new mysqli('localhost','root','','bus');
   
    if($conn->connect_error)
    {
        echo 'cant execute code';
    }
    else
    {
        
        $Qr= "select *from sign_up where (id='{$_POST['id']}' AND pass='{$_POST['pass']}')";
        $fet = $conn->query($Qr);
        
         while($row = $fet->fetch_assoc()) 
    {

        //echo "${data['name']}";20
        // echo "${row['name']}";
        // echo "<br>";
        // echo "${row['last']}";
        //// some think like source and destination data fetch

        echo "<br>";
        echo "<hr>";
        echo " <b> Welcome --->  </b> ";
        echo "<b> ${row['fname']} </b>";
        echo "   ";
        echo "<b> ${row['lname']} </b>";
        echo "   ";
        echo "<br>";
        echo "<hr>";echo "<hr>";
        echo"<b>";
        echo "ID --->   ";
        echo "${row['id']}";
        echo"<br>";
        echo "<hr>";
        echo "Password --->     ";
        echo "${row['pass']}";
        echo"  ";echo"<br>";echo"<br>";
        echo '<a href="../html/home.html">
        <button>Book Ticket </button>
      </a>';
       // echo '<a href="home.html"><input type="submit"/> </a>';
        // echo "${row['lname']}";
        // echo "<br>";
        // echo "<hr>";
        // echo " Source --->  ";
        // echo "${row['source']}";
        // echo "   ";
        // echo "  To  ";
        // echo "${row['destination']}";
        // echo "<br>";
        // echo "<hr>";
        // echo "Adhar-Number --->  ";
        // echo "${row['adhar']}";
        // echo "<br>";
        // echo "<hr>";
        // echo "Mobile Number --->  ";
        // echo "**********";
        // echo "<br>";
        // echo "<hr>";
        // echo "Date --->  ";
        // echo "${row['Time1']}";
        //echo "${row['mobile_no']}";
        // echo "<hr>";
        // echo "Date --->  ";
        // echo "${row['Time1']}";
        // echo "<hr>";echo "<hr>";
        $flag = 1;
       
    }

    }
        if($flag==0)
        {
            echo "<br> <br> <br> <br> <b> Enter Valid Details Like password or Id ...</b>";
            echo "<br><b>Thank-You</b>";
        }
}

else{
    echo "can't if touch";
}

?>