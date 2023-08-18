<?php

        // && isset( $_POST['name']) 
        //'{$_POST['name']}'


    if  (        isset( $_POST['fname'])  && isset( $_POST['lname'])  && isset( $_POST['email'])
            &&   isset( $_POST['pass']) && isset( $_POST['cpass']) && isset( $_POST['mobile_no'])
           
        )
    

    {   // connect for inserting the data on database
        $conect = new mysqli('localhost','root','','bus');

        if($conect->connect_error)
        {
            echo 'System_range';
        }
        else{
            
            $q = "insert into sign_up(fname,lname,email,pass,cpass,mobile_no) values('{$_POST['fname']}','{$_POST['lname']}','{$_POST['email']}','{$_POST['pass']}','{$_POST['cpass']}','{$_POST['mobile_no']}')";
            $fetch = $conect->query($q);
           
            // $tnq = "select Ticket_Number from user_info";
            // $tn = $conect->query($tnq);
           //  echo '$tn';

            if($fetch==true)
            { echo "access";
                //  //ticket content Along as ...
                  $tn = new mysqli('localhost','root','','Bus');
                 $tnq = "select *from sign_up ORDER BY id DESC limit 1 ";
                $id = $tn->query($tnq); 
                echo "  Submition Your<b> ID NUMBER </b> Is Booked";echo "<br>";
                while($row = $id->fetch_assoc()) 
                {   //echo "Deatails";
                    
                   echo"<hr>";
                  $sr = "${row['id']}";  
                    echo "id  --->   $sr"; 
                    echo"<br>";
                    echo"<hr>";
                    echo"<hr>";
                    echo "User_Name  --->   ";
                    echo "${row['fname']}";
                    echo"-";
                    echo "${row['lname']}";
                    echo"<br>";
                    echo"<hr>";
                    echo"<hr>";
                    echo "Mobile_Number --->   ";
                    echo "${row['mobile_no']}";
                //     echo"<br>";
                //     echo"<hr>";
                //     echo"<hr>";
                //     echo "Date --->   ";
                //     echo "${row['Time1']}";
                //     echo"<hr>";
                //     echo"<hr>";
                //     echo "${row['Timing']}";
                //     echo"<hr>";
                //     echo"<hr>";
                //     //echo "<button>  <a href="home.html"> BACK </a> </button>";
                echo"<br>";echo"<br>"; echo "<button onclick = window.print()>Print</button>";
                echo"  ";
                echo '<a href="../html/home.html">
                    <button>Book Ticket </button>
                         </a>';
               
                 }
                


            }
            else{
                echo "something error";
            }
        }


    }
    else {
        echo "cant touch if condition ";
    }

?>