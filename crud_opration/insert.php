
<?php
include ('dbcon.php');

if (isset($_POST["add_students"])){

    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $age = $_POST["age"];


    if (empty($fname)){
        
        header('location:index.php?message=You need fill in the firstname!!');
    }
    elseif (empty($lname)){
        header('location:index.php?lname_msg=You need fill in the lastname!!');
    }
    elseif (empty($age)){
        header('location:index.php?age_msg=You need fill in the age!!');      
    }

    else{

        $query = "INSERT INTO `students`(`first_name`, `last_name`, `age`) VALUES ('$fname','$lname','$age')";

        $result = mysqli_query($conn,$query);

        if (!$result){
            die("query Faild".mysqli_error($conn));
        }
        else{
            header('location:index.php?insert_msg=Your data will be added successfully');

            
        }
    }
}


?>