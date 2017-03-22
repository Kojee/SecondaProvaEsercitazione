<?php
session_start();
?>
<html>
    <head>
    </head>
    <body>
        <?php
            if(!isset($_SESSION["username"])){
                echo "<p>Login</p>" .
                "<form action='login.php' method='POST'>".
                    "<input type='text' name='username' placeholder='Username'>".
                    "<input type='password' name='password' placeholder='Password'>".
                    "<input type='submit' value='Login'>".
                "</form>".
                "<p>Sign Up</p>".
                "<form action='signup.php' method='POST'>".
                    "<input type='text' name='username' placeholder='Username'>".
                    "<input type='password' name='password' placeholder='Password'>".
                    "<input type='submit' value='Sign up'>".
                "</form>";
            }
            else{
                echo "<p> Logged in as " . $_SESSION["username"];
                echo "<p>Logout</p>" .
                "<form action='logout.php' method='POST'>".
                    "<input type='submit' value='Logout'>".
                "</form>";
            }
        ?>
        
        
    </body>
</html>