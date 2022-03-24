<?php
       include('db_connection.php');
       
       $sql="SELECT * FROM department;";
       $result=mysqli_query($connection,$sql);
       
       
 ?>