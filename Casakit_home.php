<?php 
session_start();
include "style.php";

if (!isset($_SESSION['NotSup'])){
    echo "<script>alert('Please login first!')</script>";
    echo "<script>window.location.href='LoginHere'</script>";
}


?>
<?php 
include "style.php"; // If necessary for dynamic styling or additional CSS imports
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link
            rel="icon"
            href="images/logo.png"
            type="image/x-icon"
        />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Font for professional typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="logo-container">
            <img src="images/logo.png" alt="CCP Logo">
            <div class="logo">Kenneth <span>Casakit</span></div>
            </div>
            <ul class="nav-links">
                <li><a href="logout.php">Logout</a></li>
                <hr style="text-align: center; margin-left: 10%; margin-right: -5px;">
            </ul>
        </nav>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section">

    <div class="content">
        <section id="video-sections" class="video-section">
            <video autoplay muted loop playsinline>
        <source src="as.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

<br><br>


</body>
</html>
</body>
</html>