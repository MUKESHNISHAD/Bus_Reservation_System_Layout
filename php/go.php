<?php
if(isset($_POST['name']))
    {
        $con = new mysqli('localhost','root','','go');
        $q = "insert into q values('{$_POST['name']}')";
        $fet=$con->query($q);
        if($fet==true)
        {
            echo "Inserted Data";
        }
        while($q->fetch_field())
        {
            echo "name - $q";
        }
    }
else{
    echo 'can not fine name';
}
?>