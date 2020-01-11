
<?php 
    session_start();

    function preDump ($var) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }

    function sanitize($input) {
        htmlspecialchars(addslashes(trim($input)));
    }

    preDump($_POST);
    preDump($_GET);
    // preDump(filter_list());
    
    // validation - for data consistency, not empty, format [alpha, numeric, alphanum, special]
    // sanitization - for security
        // -- addslashes() "World's" -> "Wordl\'s"
        // -- strip_tags() "<p>Name</p>" -> "Name"
        // -- htmlentities() 
        // -- htmlspecialchars()
    
    if (isset($_POST['submit'])){

        $firstName = filter_var($_POST['first_name']);
        $lastName = $_POST['last_name'];

        if (empty($firstName)) {
            $_SESSION['error']['first_name'] = "Please enter email";
        } elseif (!filter_var($firstName, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error']['first_name'] = "$firstName is not a valid email address";
        } else {
            
        }

    }

    session_destroy();

?>