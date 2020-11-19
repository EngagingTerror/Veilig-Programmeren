<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    echo "Your Username is ".$name."<br>".PHP_EOL;
    echo "Your Password is ".$pass."<br>".PHP_EOL;
    echo "Your have succelfully log in.";

}

    echo "<p>E-mail has been succelfully send to ". $_GET["getEmail"]. " for a password reset.</p>";


    include "db.php";


        echo "username: ". $_GET['user_name']."<br/>". "Password: ". $_GET['pass_word'];


    $username = $_GET['user_name'];
    $password = $_GET['pass_word'];
    $myConn = new DB;



    $query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";

    $result = $myConn->executeSQL($query);


    if (!empty($result)) { 
        echo "<br> Login as $username <br>";

        print_r($result);
    } else {
        echo "<br> Invalid login! <br>";
        print_r($result);
    }

    ?>