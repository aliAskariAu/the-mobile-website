<?php


//function to add a new user 
function add_new_user($firstname, $lastname, $username, $user_password) { 
global $conn;

   $sql = "INSERT INTO user (firstname, lastname, username, user_password) VALUES (:firstname, :lastname, :username, :user_password)"; 
    $statement = $conn->prepare($sql); 
    $statement->bindValue(':firstname', $firstname); 
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':user_password', $user_password);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;  

    } 
    
    //Login function
function login($username, $user_password) { 
    global $conn;
    global $permissions;

    $sql = "SELECT * FROM user WHERE username = :username";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':username', $username); 
    $statement->execute(); 
    $result = $statement->fetch();
    if (isset($result[0])) {
        if (password_verify($user_password, $result['user_password'])) {
            $permissions = $result['permissionsID'];
            $count = $statement->rowCount(); 
            return $count;
        } 
    else {
        exit ("Password is not correct. <a href='../view/login.php'>Please try again</a>");
    }
    } else {
        exit ("Username is not correct. <a href='../view/login.php'>Please try again</a>");
    }
    }

//Function to retrieve salt 
function retrieve_salt($username) { 
    global $conn; 
    $sql = "SELECT * FROM user WHERE username = :username";
    $statement = $conn->prepare($sql); 
    $statement->bindValue(':username', $username); 
    $statement->execute(); 
    $result = $statement->fetch(); 
    $statement->closeCursor(); 
    return $result; 
    }



    ?>