<!DOCTYPE html>
<html>
<head>
    <title>Explore Paradigms</title>
</head>
<body>
<style>
    h1 {
        color: #0c141f;
        font-size: 3em;
        text-align: center;
        margin-top: 50px;
    }
    h2{
        color: #6e0f0f;
        font-size: 1em;
        text-align: center;
        margin-top: 50px;
    }
    img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        width: 300px
    }
    button {
        background-color: #d3cb71; /* Green */
        border: none;
        color: #171616;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    body {
        background-color: #9dbdce;
    }
</style>

<?php
    echo "<h1>Welcome to Explore paradigms</h1>";
    echo '<img src="Explore paradigms.jpg" alt="We are glad to see you here.">';

    echo "<h2>To register or to log in click here</h2>";
    echo "<div style='text-align: center;'>";
    echo "<a href='register.php'><button>Register</button></a>";
    echo "<a href='log in.php'><button>Log in</button></a>";
    echo "</div>";
?>



</body>
</html>
