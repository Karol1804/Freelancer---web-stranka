<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "freelancer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check punction
mysqli_set_charset($conn, 'utf8');
	
$sql = "SELECT Title, Body FROM staticpage WHERE Id = 1";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result); // vytvori pole

$headerTitle = $row["Title"];
$headerBody = $row["Body"];

mysqli_close($conn);
?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name"><?= $headerTitle; ?></span>
                        <hr class="star-light">
                        <p><span class="skills">- <strong><?= $headerBody; ?></strong> -</span></p>
												<p>Komplexné služby pre výstavbu rodinných domov, právne poradenstvo, nájdenie pozemku a mnoho ďalšieho...</p>
                    </div>
                </div>
            </div>
        </div>
    </header>