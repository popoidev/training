<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php  require_once('submit.php'); ?>

    <?php
        echo htmlspecialchars("<p>asdsad</p>");
    ?>
</head>
<body>
    <!-- validation -->
    <form action="" method="POST">
        <p> Firstname: <input type='text' name="first_name" value="" placeholder="<?php echo isset($_SESSION['error']['first_name']) ? $_SESSION['error']['first_name'] : "First Name"; ?>" /></p>
        <p> Lastname: <input type='text' name="last_name" value=""  /></p>
        <input type='submit' name="submit" value="Submit" />
    </form>
</body>

</html>



