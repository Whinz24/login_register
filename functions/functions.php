<?php 
include 'config.php';

switch($_POST['action']) {

    case 'register':
    $username = $db->real_escape_string($_POST['username']);
    $hash = $db->real_escape_string($_POST['password']);
    $password = password_hash($hash,PASSWORD_DEFAULT);
    $role = $db->real_escape_string($_POST['role']);

    $query = $db->query("SELECT * FROM account_tbl WHERE username = '$username'");
    $check = $query->num_rows;
    if($check > 0) {
        notify($success = false, $bgcolor = '#ff0000',$color = '#fff', $message = 'Username is already exist');
    } else {
        $query = $db->query("INSERT INTO account_tbl
        (username,password,role) VALUES ('$username','$password','$role')");
        if($query) {
            notify($success = true, $bgcolor = '#336699',$color = '#fff', $message = 'You are successfully registered');
        }
    }
    break;

    case 'login':
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);
    $query = $db->query("SELECT * FROM account_tbl WHERE username = '$username'");
    $check = $query->num_rows;
    if($check > 0) {
        $row = $query->fetch_object();
        $role = $row->role;
        $hash = $row->password;
        $verify = verify($password,$hash);
        if($verify && $role == 0) {
            notify($success = true, $bgcolor = '#336699',$color = '#fff', $message = 'You are logged in as administrator');
        } elseif($verify && $role == 1) {
            notify($success = true, $bgcolor = '#336699',$color = '#fff', $message = 'You are logged in as member');
        } else {
            notify($success = false, $bgcolor = '#ff0000',$color = '#fff', $message = 'Invalid username or password');
        }
    } else{
        notify($success = false, $bgcolor = '#ff0000',$color = '#fff', $message = 'Invalid username or password');
    }
    break;
    

}

function verify($password,$hash) {
    return password_verify($password,$hash);
}

function notify($success,$bgcolor,$color,$message) {
    echo json_encode(array('success' => $success,'bgcolor' => $bgcolor,'color'   => $color,'message' => $message));
}