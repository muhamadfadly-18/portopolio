
<?php
// session_start();


// if (!isset($_SESSION['Username'])) {
//     header("location: home.php");
// }


$server = mysqli_connect("localhost","root","","db_ikantin");

if($server){
    echo "";
}else{
    echo "TIDAK BERHASIL".'<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
    div.halaman{
    text-align: center;
	padding: 30px 20px;	
	border:2px solid white;
	border-radius: 10px;
    width: 20%;
    height: 20%;
    margin-left: 550px;
    margin-top: 300px;
        }
    </style>
    <div class = "halaman">
        <h2>Harap Register !!</h2>
<center>

<?php
// include("koneksi.php");

if($_SERVER ["REQUEST_METHOD"] == "POST"){

$username = $_POST["user"];
$password = $_POST["pass"];


$sql = "SELECT * FROM kantin  WHERE username = '$username'";
$result = mysqli_query($server, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<i style='color: red; font-style: italic;'>Username sudah terdaftar</i>";
    
} else {

    $sql = "INSERT INTO kantin (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($server, $sql)) {
        echo "<script>
        alert ('Pendaftaran Berhasil') ;
        document.location.href = 'login.php?page=login';
    </script>";
    } else {
        echo "Gagal";
        }
    }   
}
?>


    
<div class = "container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username <br> <input type="text" name = "user" placeholder = "Name"> </input> <br>
    password  <br> <input type="password" name = "pass" placeholder = "Password"> </input> <br>

        <br> <input type="submit" name = "submit" value = "Register">      </input> 
    </div>
    
        
</center>
<br>

</body>
</html>