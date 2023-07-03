<?php
//Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Get the form data from the HTML file
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Basic data validation
    if (empty($name) || empty($email) || empty($message)) {
        //Stop the process if any fields are missing, display an error message
        die('Please fill in all fields');
    }
    //Display a success message
    echo 'All sent! End of Demo';
}
?>
