<?php
    session_start();
?>

<script src="../script/header.js" defer></script>

<div class="header vw-100">
    <div class="container flex h-min-80 vertical-center space-between">
        <div class="header-main flex space-between">
            <div class="logo">
                <a href="">FindPlace</a>
            </div>
            <div id="hambeger-menu" onclick="clicked()">
                <i  class="ri-menu-line"></i>
            </div>
        </div>
        <div class="header-content flex gap-x-30 vertical-center">
            <a href="" class="nav-link">Apartment</a>
            <a href="" class="nav-link">About Us</a>
            <a href="" class="nav-link">Contact Us</a>

            <?php
                if(!isset($_SESSION['user-id'])){
                    echo "<a href='' class='nav-link'>Login</a>";
                    echo "<a href='' class='border-btn'>Join</a>";
                }
            ?>

        </div>
    </div>
</div>
