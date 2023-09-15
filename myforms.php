<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $postArray = array();

            if (empty($_POST["name"])) {
                
            }
        }

    ?>

    <!-- <?php 
    
        // // Create a PDO database connection
        // $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

        // // Define the SQL query with a placeholder
        // $sql = "SELECT * FROM users WHERE username = :username";

        // // Prepare the SQL statement
        // $stmt = $pdo->prepare($sql);

        // // Bind values to the placeholders
        // $username = 'john_doe';
        // $stmt->bindParam(':username', $username, PDO::PARAM_STR);

        // // Execute the query
        // $stmt->execute();

        // // Fetch the results
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // // Do something with the results
        // foreach ($result as $row) {
        //     echo $row['username'] . "<br>";
        // }
    
    ?> -->


    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <input type="text" name="thename"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    


</body>
</html>