<?php

        if(  isset($_POST['source']) &&  isset($_POST['destination']) &&
             isset($_POST['Ticket_Number'])   && isset($_POST['Timing'])   )
          {

            $con = new mysqli('localhost','root','','bus');
            if($con->connect_error)
            {
                echo " error!";
            }
            else
            {
                $q = "delete from user_info where ( source='{$_POST['source']}' AND destination='{$_POST['destination']}' AND Ticket_Number='{$_POST['Ticket_Number']}' AND Timing='{$_POST['Timing']}')";
                $fet = $con->query($q);
                if($fet==true)
                {
                    echo "deleted";
                }
                else
                {
                    echo"not delete";
                }

            }


          }
        else{

            echo "Can't Select Some perticals";
        }


?>