<?php
include('server.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category | Byoulib</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0%;
        box-sizing: border-box;
        font-family: Arial;
    }

    body {
        background: #EFF0F3;
    }

    .nav {
        width: 100%;
        height: 55px;
        background-color: #1A3873;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .right-group ul {
        padding: 15px 20px;
        display: flex;
    }

    .right-group ul li {
        list-style: none;
    }

    .right-group ul li a {
        text-decoration: none;
        color: #EFF0F3;
        padding: 30px 20px;
    }

    .left-group ul {
        padding: 15px 20px;
        display: flex;
    }

    .left-group ul li {
        list-style: none;
    }

    .left-group ul li a {
        text-decoration: none;
        color: #EFF0F3;
        padding: 30px 10px;
    }
</style>

<body>
    <div class="nav">
        <div class="left-group">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div class="right-group">
            <ul>
                <?php if (isset($_SESSION['username'])) : ?>
                    <li>
                        <p><a href="home.php?logout='1'" style="color: red;">Logout</a></p>
                    </li>
                <?php else : ?>
                    <li>
                        <p><a href="login.php">Login</a></p>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <div class="header">
        <h4>Category</h4>
    </div>
    <div class="content" style="  display: inline-flex;
  flex-wrap: wrap;">
        <form method="POST" action="category_selected.php">
            <div><a href="category_selected.php?name=art&music">Art & Music</a></div>
            <div><a href="category_selected.php?name=biographies">Biographies</a></div>
            <div><a href="category_selected.php?name=education">Education</a></div>
            <div><a href="category_selected.php?name=history">History</a></div>
            <div><a href="category_selected.php?name=fiction">Fiction</a></div>
            <div><a href="category_selected.php?name=bussiness">Bussiness</a></div>
        </form>
    </div>
</body>

</html>