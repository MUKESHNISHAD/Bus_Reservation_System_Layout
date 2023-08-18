<?php

        // && isset( $_POST['name']) 
        //'{$_POST['name']}'


    if  (        isset( $_POST['name'])  && isset( $_POST['middile'])  && isset( $_POST['last'])
            &&   isset( $_POST['source']) && isset( $_POST['destination']) && isset( $_POST['adhar'])
            &&   isset( $_POST['mobile_no']) && isset($_POST['Time1'])
             && isset($_POST['Timing'])
        )
    

    {   // connect for inserting the data on database
        $conect = new mysqli('localhost','root','','bus');

        if($conect->connect_error)
        {
            echo 'System_range';
        }
        else{
            
            $q = "insert into user_info(name,middile,last,source,destination,adhar,mobile_no,Time1,Timing) values('{$_POST['name']}','{$_POST['middile']}','{$_POST['last']}','{$_POST['source']}','{$_POST['destination']}','{$_POST['adhar']}','{$_POST['mobile_no']}','{$_POST['Time1']}','{$_POST['Timing']}')";
            $fetch = $conect->query($q);
           
            // $tnq = "select Ticket_Number from user_info";
            // $tn = $conect->query($tnq);
           //  echo '$tn';

            if($fetch==true)
            {
                 //ticket content Along as ...
                 $tn = new mysqli('localhost','root','','bus');
                $tnq = "select *from user_info ORDER BY Ticket_Number DESC limit 1 ";
                $table_Ticket = $tn->query($tnq); 
                echo "  Thank For Submition Your Ticket Is Booked";echo "<br>";
                while($row = $table_Ticket->fetch_assoc()) 
                {   //echo "Deatails";
                    
                    echo"<hr>";
                    $sr = "${row['Ticket_Number']}";  
                    echo "Ticket_Number  --->   $sr"; 
                    echo"<br>";
                    echo"<hr>";
                    echo"<hr>";
                    echo "Passanger_Name  --->   ";
                    echo "${row['name']}";
                    echo"-";
                    echo "${row['last']}";
                    echo"<br>";
                    echo"<hr>";
                    echo"<hr>";
                    echo "Source --->   ";
                    echo "${row['source']}";
                    echo " To ";       
                    echo "${row['destination']}";
                    echo"<br>";
                    echo"<hr>";
                    echo"<hr>";
                    echo "Mobile_Number --->   ";
                    echo "${row['mobile_no']}";
                    echo"<br>";
                    echo"<hr>";
                    echo"<hr>";
                    echo "Date --->   ";
                    echo "${row['Time1']}";
                    echo"<hr>";
                    echo"<hr>";
                    echo "${row['Timing']}";
                    echo"<hr>";
                    echo"<hr>";
                    //echo "<button>  <a href="home.html"> BACK </a> </button>";
                    echo "<button onclick = window.print()>Print</button>";
               
               
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