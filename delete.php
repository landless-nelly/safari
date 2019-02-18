<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 10:59 AM
 */

if (isset($_GET['x'])){
    $conn=mysqli_connect('localhost','root','','safari');
    if(!$conn){
        echo "Failed to connect to the DB";
    }else{
        extract($_GET);
        mysqli_query($conn," DELETE FROM majina WHERE id=$x");
        header("location:viewUsers.php");
    }
}



?>