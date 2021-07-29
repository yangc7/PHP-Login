<?php
    include_once 'header.php';
?>

<section class="main-container">

    <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
        }
    ?>
    <div class="main-wrapper">
        <h2>Home</h2>
    </div>
</section>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign Up</h2>
    </div>
</section>

<!-- <form class="signup-form" action='includes/signup.inc.php' method="POST">
    <input type="text" name="name" placeholder="Full name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
    <button type="submit" name="submit">Sign Up</button>
</form> -->

</body>
</html>

<?php
    include_once 'footer.php';
?>


