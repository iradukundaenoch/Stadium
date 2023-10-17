<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); //start session if session not start
}
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">Online Ticketing<?php echo isset($_SESSION['logged']) && $_SESSION['role'] == 'ADMIN' ? ' Admin Panel' : ''; ?></a>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/stadium/admin/reservation.php">Reserved
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                </a></li>
            <li class=""><a href="/stadium/admin/transaction.php">Transaction
                    <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="index.php#home">Home</a>
            </li>
            <li>
                <a href="index.php#about">About</a>
            </li>
            <li>
                <a href="index.php#contact">Contact Us</a>
            </li>
            <?php
            if (isset($_SESSION['logged'])) {
            ?>
                <li><a href="/stadium/admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

            <?php
            } else {

            ?>
                <li><a href="/stadium/admin"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>

            <?php
            }
            ?>
        </ul>
    </div>
</nav>