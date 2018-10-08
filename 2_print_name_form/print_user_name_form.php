<?php

$errors = [];

include "form_handler.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Practice | Get user name from the user and print the welcome message</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="fname">First Name: </label>
        <input type="text" name="fname" id="fname" placeholder="Enter your first name" />
        <br />
        <label for="lname">Last Name(optional): </label>
        <input type="text" name="lname" id="lname" placeholder="Enter your last name" />
        <br />
        <input type="submit" name="submit" value="Submit!">
    </form>

    <?php if(count($errors) > 0){ ?>
        <ul>
            <?php foreach($errors as $error){ ?>
                <li><?php echo $error; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if(count($errors) == 0){
        echo "<p>Welcome " . ucfirst($fullname) . "!</p>";
    } 
    ?>
        
</body>
</html>