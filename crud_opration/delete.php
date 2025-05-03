<?php include ('dbcon.php');?>

<?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $query = "DELETE FROM `students` WHERE `id` = '$id'";

        $result = mysqli_query($conn, $query);

        if(!$result){

            die("Query Faild".mysqli_error($conn));
        }
        else{
            header('location:index.php?delete_msg=Your have deleted the record.');
        }
    }

?>