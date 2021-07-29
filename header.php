<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <link rel='stylesheet'type='text/css'href='style.css'>

</head>
<body>

<header>
    <div class="wrapper">
        <nav>
            <ul>
                <li>
                    <a href='login.php'>Home</a>
                </li>
            </ul>
    
            <div class='nav-login'>
                <form>
                    <input type='text' name='uid' placeholder='Username/E-mail'>
                    <button type='submit' name='submit'>Login</button>
                </form>

                <?php
                if (isset($_SESSION["usersuid"])) {
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Signup</a></li>";

                }
                ?>

    
            </div>
        </nav>
    </div>
</header>