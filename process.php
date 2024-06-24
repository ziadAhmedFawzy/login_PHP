<?php 

if(isset($_POST["processing"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "root" && $password == '') {
        echo "<p class=\"access\"> access </p>";
    }
    else {
        for($i = 0; $i < 1; $i++) {
            echo "<p class=\"error\"> Error </p>";
        }
    }
}