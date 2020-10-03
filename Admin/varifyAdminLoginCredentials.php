<?php

include 'Arslan151/connection.php';

if(isset($_POST['email'],$_POST['password'])) {
    $result = $db->prepare("SELECT * FROM employee where email_id = ? AND password = ?");
    $result->execute(array($_POST['email'],$_POST['password']));
    $row = $result->fetch();
    if ($row > 0) {
        echo json_encode(array('success' => 1, 'message' => 'Login successfull'));
    } else {
        echo json_encode(array('success' => 0, 'message' => 'Login unsuccessfull, check credentials'));
    }
}
?>