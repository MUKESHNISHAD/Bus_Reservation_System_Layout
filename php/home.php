<?php
echo "...........................................PASSANGER INFORMATION....................................";
if(isset($_POST['Ticket_Number']) && isset($_POST['source']) && isset($_POST['destination'])
  )
{   echo "ise";
    $conn = new mysqli('localhost','root','','bus');
   
    if($conn->connect_error)
    {
        echo 'cant execute code';
    }
    else
    {
        
        $Qr= "select *from user_info where (  source='{$_POST['source']}' AND destination='{$_POST['destination']}' AND Ticket_Number='{$_POST['Ticket_Number']}')";
        $fet = $conn->query($Qr);
        //$store = $_POST['Ticket_Number'];
         while($row = $fet->fetch_assoc()) 
    {

        //echo "${data['name']}";20
        // echo "${row['name']}";
        // echo "<br>";
        // echo "${row['last']}";
        //// some think like source and destination data fetch



        echo "<br>";
        echo "<hr>";echo "<hr>";
        echo"<b>";
        echo "Ticket-Number  --->   ";
        echo "${row['Ticket_Number']}";
        echo"<br>";
        echo "<hr>";
        echo "Passanger_Name --->     ";
        echo "${row['name']}";echo"  ";echo "${row['last']}";
        echo "<br>";
        echo "<hr>";
        echo " Source --->  ";
        echo "${row['source']}";
        echo "   ";
        echo "  To  ";
        echo "${row['destination']}";
        echo "<br>";
        echo "<hr>";
        echo "Adhar-Number --->  ";
        echo "${row['adhar']}";
        echo "<br>";
        echo "<hr>";
        echo "Mobile Number --->  ";
        echo "**********";
        echo "<br>";
        echo "<hr>";
        // echo "Date --->  ";
        // echo "${row['Time1']}";
        //echo "${row['mobile_no']}";
        echo "<hr>";
        echo "Date --->  ";
        echo "${row['Time1']}";
        echo "<hr>";echo "<hr>";
        
       
    }

    }

}








?>