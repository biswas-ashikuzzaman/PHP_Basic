<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>local variable</title>
</head>
<body>
    <h1>locla variable</h1>
    <?php
    // Local variable example
    function myFunction() {
        $localVar = "I am a local variable!";
        echo $localVar . "<br>";
    }
    myFunction(); // This will output: I am a local variable!
    // Trying to access the local variable outside its scope will result in an error
    // echo $localVar; // Uncommenting this line will cause an error: Undefined variable
    ?>
    <h2>Explanation</h2>
    <p>
        In the code above, we define a function <code>myFunction</code> that contains a local variable <code>$localVar</code>. 
        This variable is only accessible within the function's scope. When we call <code>myFunction</code>, it outputs the value of <code>$localVar</code>.
        If we try to access <code>$localVar</code> outside of the function, it will result in an "Undefined variable" error.
    </p>
    <h2>Key Points</h2>
    <ul>
        <li>Local variables are defined within a function and can only be accessed within that function.</li>
        <li>They are created when the function is called and destroyed when the function execution is completed.</li>
        <li>Attempting to access a local variable outside its scope will result in an error.</li>
    </ul>
    <h2>Example of Local Variable Usage</h2>
    <p>
        Local variables are useful for temporary data storage and manipulation within a function. 
        They help in keeping the global scope clean and prevent variable name conflicts.
    </p>
    <h2>Conclusion</h2>
    <p>
        Understanding local variables is crucial for effective function design in PHP. 
        They allow for encapsulation of logic and data, making your code more modular and maintainable.
    </p>
</body>
</html>