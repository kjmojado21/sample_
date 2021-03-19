<?php 
include 'Database.php';

Class Person extends Database{
    // CRUD [C-reate]
    public function create_user($firstname,$lastname,$username,$password){
        $sql = "INSERT INTO users (first_name,last_name,username,password) VALUES ('$firstname','$lastname','$username','$password')";
        $result = $this->conn->query($sql);
        // $result = $conn->query($sql)

        // kinda optional
        if($result == TRUE){
            echo "adding new person has been completed";
        }else{
            die($this->conn->error);
            // die means stop execution
        }

    }

    // CRUD[R-ead/R-etrieve]//display

    public function display_persons(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        // return $result->num_rows;
        if($result->num_rows>0){
            $blankArray = array();
            while($row = $result->fetch_assoc()){
                $blankArray[] = $row;
            }
            return $blankArray;


        }else{
            return FALSE;
        }

    }

   

    

}
$Person = new Person;
echo $Person->display_persons();

// $array = array(sample1,sample2);
// $array = ['data1','data2'];

// $arrayOne = array(
//     array('sample1'=>'data2'),
//     array('sample1'=>'data2'),
//     array('sample1'=>'data2'),
// );
    

echo "<pre>";
    print_r($Person->display_persons());
echo "</pre>";


?>