<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super_global_variable</title>
</head>
<body>
    <h1>concept of super_global_variable</h1>
    <?php
    // Superglobal variables in PHP
    // 1. $_GET
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "Hello, " . $name . "!<br>";
    } else {
        echo "No name provided.<br>";
    }
    // 2. $_POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['email'])) {
            $email = htmlspecialchars($_POST['email']);
            echo "Email submitted: " . $email . "<br>";
        } else {
            echo "No email provided.<br>";
        }
    }
    // 3. $_REQUEST
    if (isset($_REQUEST['age'])) {
        $age = htmlspecialchars($_REQUEST['age']);
        echo "Age provided: " . $age . "<br>";
    } else {
        echo "No age provided.<br>";
    }
    // 4. $_SESSION
    session_start();
    if (!isset($_SESSION['views'])) {
        $_SESSION['views'] = 0;
    }
    $_SESSION['views']++;
    echo "Page views: " . $_SESSION['views'] . "<br>";
    // 5. $_COOKIE
    if (isset($_COOKIE['user'])) {
        echo "Welcome back, " . htmlspecialchars($_COOKIE['user']) . "!<br>";
    } else {
        setcookie('user', 'John Doe', time() + 3600); // Set cookie for 1 hour
        echo "Cookie set for user: John Doe<br>";
    }
    // 6. $_FILES
    if (isset($_FILES['fileToUpload'])) {
        $file = $_FILES['fileToUpload'];
        if ($file['error'] == UPLOAD_ERR_OK) {
            echo "File uploaded successfully: " . htmlspecialchars($file['name']) . "<br>";
        } else {
            echo "File upload error: " . $file['error'] . "<br>";
        }
    } else {
        echo "No file uploaded.<br>";
    }

    // 7. $_ENV
    if (isset($_ENV['PATH'])) {
        echo "Environment PATH: " . htmlspecialchars($_ENV['PATH']) . "<br>";
    } else {
        echo "No environment variable PATH found.<br>";
    }
    // 8. $_GLOBALS
    $globalVar = "I am a global variable!";
    function showGlobalVar() {
        global $globalVar;
        echo "Global variable: " . $globalVar . "<br>";
    }
    showGlobalVar();
    // 9. $_SERVER
    echo "Server name: " . htmlspecialchars($_SERVER['SERVER_NAME']) . "<br>";
    echo "Script name: " . htmlspecialchars($_SERVER['SCRIPT_NAME']) . "<br>";
    echo "Request method: " . htmlspecialchars($_SERVER['REQUEST_METHOD']) . "<br>";
    echo "User agent: " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "<br>";
    // 10. $_FILENAME
    if (isset($_SERVER['SCRIPT_FILENAME'])) {
        echo "Script filename: " . htmlspecialchars($_SERVER['SCRIPT_FILENAME']) . "<br>";
    } else {
        echo "No script filename found.<br>";
    }
    // 11. $_PROTOCOL
    if (isset($_SERVER['SERVER_PROTOCOL'])) {
        echo "Server protocol: " . htmlspecialchars($_SERVER['SERVER_PROTOCOL']) . "<br>";
    } else {
        echo "No server protocol found.<br>";
    }
    // 12. $_HTTP_RAW_POST_DATA
    if (isset($HTTP_RAW_POST_DATA)) {
        echo "Raw POST data: " . htmlspecialchars($HTTP_RAW_POST_DATA) . "<br>";
    } else {
        echo "No raw POST data found.<br>";
    }
    
    ?>
    <h2>Explanation</h2>
    <p>
        In the code above, we demonstrate the use of various superglobal variables in PHP. 
        Superglobals are built-in variables that are always accessible, regardless of scope. 
        They provide a way to access data from different sources such as user input, session data, cookies, and more.
    </p>
    <h2>Key Points</h2>
    <ul>
        <li>Superglobals are accessible from any part of the script without needing to declare them as global.</li>
        <li>Common superglobals include $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_FILES, $_ENV, and $_GLOBALS.</li>
        <li>They are used for handling user input, session management, file uploads, and accessing environment variables.</li>
        <li>Always sanitize user input to prevent security vulnerabilities such as XSS (Cross-Site Scripting).</li>
    </ul>    
    <h2>Example of Superglobal Variable Usage</h2>    
    <p>
        Superglobal variables are commonly used in web applications to handle form submissions, manage user sessions, and store temporary data. 
        They allow developers to easily access and manipulate data without needing to pass it explicitly between functions or scripts.
    </p>
    <h2>Conclusion</h2>
    <p>
        Understanding superglobal variables is essential for effective PHP programming. 
        They provide a powerful way to manage data across different parts of your application, making it easier to build dynamic and interactive web applications.
    </p>

</body>
</html>