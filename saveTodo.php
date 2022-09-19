<?php include("./db_config.php");
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "<br> you have entered ". $_POST['todo']. " to the list";

        $sql = "insert into todo_list(`title`) values ('$_POST[todo]')";
        $result = $conn->query($sql);

        header('location:./index.php');
    }
?>