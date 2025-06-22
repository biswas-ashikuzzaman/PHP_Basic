<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global_variable</title>
</head>
<body>
    <h1>global variable</h1>
    <?php
    // Global variable example
    $globalVar = "I am a global variable!";
    function myFunction() {
        global $globalVar; // Declare the variable as global
        echo $globalVar . "<br>"; // This will output: I am a global variable!
    }
    myFunction(); // Call the function to see the output
    // Accessing the global variable outside the function
    echo $globalVar . "<br>"; // This will also output: I am a global variable!
    ?>
    <h2>Explanation</h2>
    <p>
        In the code above, we define a global variable <code>$globalVar</code> outside of any function. 
        Inside the function <code>myFunction</code>, we declare <code>$globalVar</code> as global using the <code>global</code> keyword. 
        This allows us to access and modify the global variable within the function's scope.
    </p>
    <h2>Key Points</h2>
    <ul>
        <li>Global variables are defined outside of functions and can be accessed from anywhere in the script.</li>
        <li>To use a global variable inside a function, you must declare it as global using the <code>global</code> keyword.</li>
        <li>Global variables can lead to code that is harder to maintain, so use them judiciously.</li>
        <li>They are useful for storing configuration settings or data that needs to be accessed across multiple functions.</li>
    </ul>
    <h2>Example of Global Variable Usage</h2>
    <p>
        Global variables are often used for configuration settings, such as database connection parameters or application settings. 
        They can also be used to store data that needs to be shared across multiple functions without passing it as a parameter.
    </p>
    <h2>Conclusion</h2>
    <p>
        Understanding global variables is essential for effective PHP programming. 
        They provide a way to share data across different parts of your application, but they should be used carefully to avoid potential conflicts and maintainability issues.
    </p>
</body>
</html>