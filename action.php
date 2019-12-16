<!DOCTYPE html>

<html>
    <head>
        <title> Confirmation</title>
    </head>

    <body>
        <div class="center">

            <?php 
                //login credentials to db
                $servername = "localhost";
                $username = "php";
                $password = "vm";
                $dbname = "exam";

                //store form inputs to variables
                $firsts = htmlspecialchars($_POST['firsts']);
                $lasts = $_SERVER['REMOTE_ADDR']
            ?>

            <?php
                //connection to db
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //insert data to db

                $sql = "INSERT INTO practice (firsts, lasts)
                    VALUES ('{$firsts}', '{$lasts}')";
                 //confirmation

                 if (mysqli_query($conn, $sql)) {
                    echo "Thank you for submitting your application.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                //close connection 
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>