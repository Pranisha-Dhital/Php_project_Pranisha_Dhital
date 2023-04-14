<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            font-family: Palatino, serif;
            background-color: #f5bee6;
            margin: 0;
        }

        header {
            text-align: center;
            background-color: #004d40;
            color: #9dbdce;
            padding: 10px;
        }

        h1 {
            text-align: center;
            margin: 0;
            color: #ad0741;
            font-size: 36px;
            font-weight: bold;
            margin-top: 50px;
        }

        h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            color: #013b32;
            text-align: center;
            margin-top: 20px;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="file"] {
            margin-top: 10px;
            border: 1px solid #341d44;
            color= #e8e195
            padding: 10px;
            font-size: 16px;
            width: 300px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #004d40;
            color: #efe7c1;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 30px 0;
        }

        img {
            margin-right: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 200px;
            height: 200px;


        }

    </style>
</head>
<body>
<body>
<h1>Welcome!</h1>
<div style="display: flex; justify-content: center;">
    <img src="Explore paradigms.jpg" alt="We are glad to see you here." style="width: 150px; height: auto;">
</div>
<h2>View, Share and Discover Innovative Ideas</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <input type="submit" name="upload" value="Upload">
</form>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "log_in";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Retrieve image paths from database
$sql = "SELECT picture_path FROM picture WHERE user_id = 1";
$result = mysqli_query($conn, $sql);

// Display images
while($row = mysqli_fetch_assoc($result)) {
echo "<img src='".$row['picture_path']."' width='200'>";
}

mysqli_close($conn);
?>
</body>
</html>
