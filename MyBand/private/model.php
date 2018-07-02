<?php

//Connects to database.
function connect_db(){
     $host = 'localhost';
     $user = 'root';
     $pass = '';
     $db = 'project_myband';

    //Connects to database.
    $mysql = new mysqli($host, $user, $pass, $db);

    //Checks for connection errors.
    if($mysql->connect_errno){
        die('Connection error: ' . $mysql->connect_errno . '<br>');
    }

    return $mysql;
}

//Registrates user.
function verify_registration(){
    $mysql = connect_db();
    $errors = array();

    //Variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];

    //Select username and email.
    $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $mysql->query($query);
    $user = mysqli_fetch_assoc($result);

    //Checks if fields are empty.
    if(empty($username) || empty($password) || empty($password_confirm) || empty($email)){
        array_push($errors, 'You did not fill out the required fields.');
    }

    //Checks if the user exists.
    if($username === $user['username']){
            array_push($errors, 'This username does already exist.');
        }
    if($email === $user['email']){
        array_push($errors, 'This email does already exist.');
    }

    //Checks if passwords match.
    if($password != $password_confirm) {
        array_push($errors, 'The passwords do not match.');
    }

    if(count($errors) > 0){
         echo '<div>';
        foreach($errors as $error){
           echo $error. '<br>';
        }
        echo '</div>';
    }

    //Insert into database when error free.
    if(count($errors) == 0){
        $hash = password_hash($password, PASSWORD_DEFAULT, array('cost' => 12 ));
        $query = 'INSERT INTO users VALUES(0, ?, ?, ?, 0)';

        //Prepared statement.
        $stmt = $mysql->prepare($query) or die('Error preparing');
        $stmt->bind_param('sss',$username,$hash, $email) or die('Error binding');
        $stmt->execute() or die('Error executing');

        echo 'Registration successful!';

    }
}

//Signs user in.
function verify_login(){
    $mysql = connect_db();
    $errors = array();

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Finds username in database.
    $result = $mysql->query("SELECT * FROM users WHERE username='$username'");
    $numRows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    //Warns if fields are empty.
    if(empty($username) || empty($password)){
        array_push($errors, 'Please fill in all the required fields.');
    }

    if(count($errors) > 0){
        echo '<div>';
        foreach($errors as $error){
            echo $error;
        }
        echo '</div>';
    }

    //log in
    if(count($errors) == 0){
        if($numRows == 1 && password_verify($password, $row['password'])){
            $_SESSION['username'] = $username;
            //Checks if the user in an admin
            if($row['isAdmin'] == 1){
                $_SESSION['admin'] = $username;
            }
        } else{
            array_push($errors,'Wrong username/password combination.');
        }
    }
}



function edit_text(){
    $mysql = connect_db();

    $new_text = $_POST['new_text'];

    $query = 'INSERT INTO text VALUES(?)';

    $stmt = $mysql->prepare($query);
    $stmt->bind_param('s', $new_text);
    $stmt->execute();


}





