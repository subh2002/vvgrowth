// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];

//     // Validate email format
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Invalid email format";
//         exit;
//     }

//     // Check if the email is already subscribed
//     $subscribersFile = 'subscribers.txt';
//     $subscribers = file($subscribersFile, FILE_IGNORE_NEW_LINES);

//     if (in_array($email, $subscribers)) {
//         echo "You are already subscribed!";
//         exit;
//     }

//     // Add new email to the subscribers list
//     file_put_contents($subscribersFile, $email . PHP_EOL, FILE_APPEND);

//     echo "You have successfully subscribed!";
//     // Redirect to index.html after 3 seconds
//     header("refresh:3;url=index.html");
//     exit; 
// }
// ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Check if the email is already subscribed
    $subscribersFile = 'subscribers.txt';
    $subscribers = file($subscribersFile, FILE_IGNORE_NEW_LINES);

    if (in_array($email, $subscribers)) {
        echo "You are already subscribed! You will be redirected within  homepage in 3 sec";
    } else {
        // Add new email to the subscribers list
        file_put_contents($subscribersFile, $email . PHP_EOL, FILE_APPEND);

        echo "You have successfully subscribed!    You will be redirected within  homepage in 3 sec";
    }
    
    // Redirect to index.html after 3 seconds
    header("refresh:3;url=index.html");
    exit; // Ensure script execution stops after redirection header
}
?>
