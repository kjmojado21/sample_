<?php 

   
public function login($username,$password){
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $this->conn->query($sql);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $_SESSION['login_id'] = $row['id'];

    // if($row['status'] == 'admin'){
            // header('location:admin.php');
    // }else{
        // header(index.php);
    // }

    header(location:index.php);

    

}else[

]
}

?>