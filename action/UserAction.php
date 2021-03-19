<?php 
include '../classes/User.php';
$Person = new Person;

if(isset($_POST['create_user'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];


    $Person->create_user($fname,$lname,$uname,$pword);

}




?>