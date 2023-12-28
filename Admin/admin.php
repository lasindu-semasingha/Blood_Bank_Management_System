<?php include('../DB/config.php'); ?>
<?php
session_start();


if (isset($_SESSION['userId'])) {

    $isLoggedIn = true;
} else {

    $isLoggedIn = false;
}


if (!$isLoggedIn && isset($_POST['login'])) {
    header("Location: login.php");
    exit();
}

if (!$isLoggedIn && isset($_POST['register'])) {
    header("Location: register.php");
    exit();
}

if ($isLoggedIn && isset($_POST['logout'])) {
    unset($_SESSION['user_id']);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
    <head>
        <title>
            Administration
        </title>
        <link rel="icon" href="../resources/ico.png">
        <link rel="stylesheet" href="../CSS/style.scss">
    </head>
    <body>
        <div class="top">
            <a class="index" href="admin.php">
                <img src="../resources/ico.png" alt="RubyCare">
                <h1 class="tracking-in-expand">Health First</h1>
            </a>
            <?php if ($isLoggedIn): ?>
                <a type="submit" class="log" href="aProfile.php">Profile</a>
                <a type="submit" class="log" href="../logout.php">Sign Out</a>
            <?php else: ?>
            <form action="index.php" method="post">
                <a type="submit" class="log" href="../login.php">Login</a>
                <a type="submit" class="log" href="../signup.php">Sign Up</a>
            </form>
            <?php endif; ?>
        </div>
        <div class="navb">
            <a href="admin.php">DashBoard</a>
            <a href="user.php">Users</a>
            <a href="feedback.php">Feedback</a>
            <a href="hosList.php">Hospitals</a>
            <a href="inventory.php">Inventory</a>
            <a href="service.php">Services</a>
            <a href="donate.php">Donations</a>
        </div>
        <div class="cards">
            <div class="doctor">
                <h3><strong>Services</strong></h3>
                <p>Update Services, Add Services, Delete Services, Read Service details</p>
                <div class="btn">
                    <button onClick="window.location.href='service.php'">ADMINISTRATE</button>
                </div>
            </div>
            <div class="hospital">
                <h3><strong>Users</strong></h3>
                <p>Update Users, Add users, Delete users, Read user details</p>
                <div class="btn">
                    <button onClick="window.location.href='user.php'">ADMINISTRATE</button>
                </div>
            </div>
            <div class="hospital">
                <h3><strong>Hospitals</strong></h3>
                <p>Add new Hospital, Update Hospital details, Delete Hospital details, Read Hospital details</p>
                <div class="btn">
                    <button onClick="window.location.href='hosList.php'">ADMINISTRATE</button>
                </div>
            </div>
            <div class="hospital">
                <h3><strong>Inventory</strong></h3>
                <p>Look for available inventory and if there's a issue contact the inventory manager</p>
                <div class="btn">
                    <button onClick="window.location.href='inventory.php'">ADMINISTRATE</button>
                </div>
            </div>
        </div>
        <footer class="foot">
            <div class="category">
                <div class="link">
                    <ul style="list-style-type:none;">
                    <h4>Quick Links</h4>
                        <li><a href="">Laboratories</a></li>
                        <li><a href="../Hospitals/hospitals.php">Hospitals</a></li>
                        <li><a href="../about.php">About</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="highlights">
                    <ul style="list-style-type:none;">
                        <h4>Highlights</h4>
                        <li><a href="../Donation/schedule.php">Donation</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Branchs</a></li>
                    </ul>
                </div>
                <div class="social">
                    <h4>Social Media</h4>
                    <a href="#"><img src="../resources/whatsapp.png" alt="whatsappp"></a>
                    <a href="#"><img src="../resources/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../resources/instagram.png" alt="instagram"></a>
                    <a href="#"><img src="../resources/linkedin.png" alt="linkedin"></a>
                </div>
                <div class="mission">
                    <h4>Join our Mission</h4>
                    <p>
                    Join Health First in saving lives through blood donation.
                    </p>
                </div>
            </div>
        </footer>
        <div class="under">
            <p>© 2023 Lasindu semasingha. All Right Reserved</p>
        </div>
        <script src="../JS/script.js"></script>
    </body>
</html>
