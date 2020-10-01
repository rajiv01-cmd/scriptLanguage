<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Site</title>
    <br>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href="index.php">Home</a> &nbsp;
    <a href="about.php">About Us</a> &nbsp;
    <a href="bloglist.php">Blogs</a> &nbsp;
    <a href="contact.php">Contact Us</a> &nbsp;
</head>
<body>
    
</body>
</html>

<?php

$cookie_name = "username";
$cookie_value = "Rajiv Shrestha";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30));

$_SESSION['user_id'] = "rajivshrestha@kbc.edu.np";

?>