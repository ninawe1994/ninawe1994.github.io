<?php
        $conn = mysql_connect("localhost","root","");
        if($conn)
        {
          mysql_select_db("hospital",$conn);
        }
        else
        {
          die("Database not connected".mysql_error());
        }
?>