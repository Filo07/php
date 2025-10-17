<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="ris";  
$conn=mysqli_connect($host,$user,$pass,$dbname);

if(isset($_POST['btn'])){
    $texten=$_POST['txt'];
    $sql="INSERT INTO linx(url) VALUES('$texten')";
    $result=mysqli_query($conn,$sql);

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="txt" placeholder="Enter URL">
        <input type="submit" name="btn" value="Submit">
    </form>
    <?php
    $sql="SELECT * FROM linx";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result)){
        echo "<h1>" .$row['url']."</h1>";
    }
    ?>
</body>
</html>