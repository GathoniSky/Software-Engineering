<?php
require_once('db.php');

// Fetching the profile data
$sql = "SELECT * FROM consultations LIMIT 1";
$result = $conn->query($sql);
$profile = $result->fetch_assoc();

// Fetch pending consultations
$sql_pending = "SELECT * FROM pending_consultations";
$result_pending = $conn->query($sql_pending);
$pending_consultations = [];
while($row = $result_pending->fetch_assoc()) {
    $pending_consultations[] = $row;
}

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
                <a href="homepage.html">
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
                    <div class="profile-card">
                        <h5>Profile</h5>
                        <p>Name: <?php echo $profile['name']; ?></p>
                        <p>Email: <?php echo $profile['email']; ?></p>
                        <p>Phone Number: <?php echo $profile['phone_number']; ?></p>
                        <p>Clinic: <?php echo $profile['clinic']; ?></p>
                    </div>
                    <div class="new-consultations-card">
                        <h5>Pending Consultations</h5>
                        <ul>
                            <?php foreach ($pending_consultations as $consultation) { ?>
                                <li><?php echo $consultation['pet_owner'] . ' - ' . $consultation['pet'] . ' - ' . $consultation['issue']; ?></li>
                            <?php } ?>
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