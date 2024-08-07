<?php

include_once('db.php');
$sql = "SELECT * FROM petquestions";

?>

<!DOCTYPE html>
<html>
    <head class="head">
        <title>Pet Connect</title>
        <meta charset="UTF-8">
        <meta name="author" content="Wayne Mogere, Alex Samuel, Khalif Abdullahi,Lesley Mwangi, Roman Ademba, Sky Gathoni and William Macharia.">
        <meta name="description" content="Our mission: To connect pet owners with vets">
        <meta name="keywords" content="pets">
        <meta name="charset" content="UTF-8">
        <link rel="shortcut icon" href="images/logo.png">
        <link rel="stylesheet" href="detailstyle.css">
    </head>
    <body>
        <header class="header">
            <div class="Logo">
                <a href="homepage.html">
                    <img id="logo" src="images/logo.png" alt="Logo">
                </a>
            </div>
            <nav class="vet-menu">
                <a href="login.html">
                    <i class="fas fa-home"></i> log out 
                </a>
            </nav>
        </header>
        <main>
            <br><br>
            <br><br>
            <h1>Overview</h1>
            <div class="dashboard">
                <div class="content">
                    <div class="new-consultations-card">
                        <h5>Pending Consultations</h5>
                        <ul>
                            <?php include 'vets.php' ?>
                        </ul>
                        <button>View & Manage</button>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            Pet Connect &copy; 2024
        </footer>
        <script src="script.js"></script>
    </body>
</html>
