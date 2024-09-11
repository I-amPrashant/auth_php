<?php 
    session_start();
    echo "Hello {$_SESSION['firstname']} welcome to php homepage";

    echo "<br><a href='login.php'>Logout</a>";
?>