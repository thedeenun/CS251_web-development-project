<?php
include('server.php');
session_start();

if (isset($_GET['name'])) {
    $categoryname = mysqli_escape_string($conn, $_GET['name']);
    $query = "SELECT * FROM book WHERE category = '$categoryname'";
    $searchquery = mysqli_query($conn, $query);
} elseif (isset($_POST['name'])) {
    $categoryname = mysqli_escape_string($conn, $_GET['name']);
    $query = "SELECT * FROM book WHERE category = '$categoryname'";
    $searchquery = mysqli_query($conn, $query);
} elseif (isset($_GET['name'])) {
    $categoryname = mysqli_escape_string($conn, $_GET['name']);
    $query = "SELECT * FROM book WHERE category = '$categoryname'";
    $searchquery = mysqli_query($conn, $query);
} elseif (isset($_GET['name'])) {
    $categoryname = mysqli_escape_string($conn, $_GET['name']);
    $query = "SELECT * FROM book WHERE category = '$categoryname'";
    $searchquery = mysqli_query($conn, $query);
} elseif (isset($_GET['name'])) {
    $categoryname = mysqli_escape_string($conn, $_GET['name']);
    $query = "SELECT * FROM book WHERE category = '$categoryname'";
    $searchquery = mysqli_query($conn, $query);
} elseif (isset($_GET['name'])) {
    $categoryname = mysqli_escape_string($conn, $_GET['name']);
    $query = "SELECT * FROM book WHERE category = '$categoryname'";
    $searchquery = mysqli_query($conn, $query);
}
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
    <table width="1200" border="1" align="center">
        <tr>
            <th width="200">
                <div align="center">Book Cover</div>
            </th>
            <th width="500">
                <div align="center">Book name</div>
            </th>
            <th width="198">
                <div align="center">Category</div>
            </th>
            <th width="198">
                <div align="center">Author</div>
            </th>
            <th width="198">
                <div align="center">Status</div>
            </th>
        </tr>
        <form method="post" action="book.php">
            <?php

            if (isset($_POST['search'])) {
                $query = "SELECT * FROM book WHERE bookName LIKE '%" . $strKeyword . "%' OR category LIKE '%" . $strKeyword . "%' OR isbn LIKE '%" . $strKeyword . "%' OR author LIKE '%" . $strKeyword . "%' ";
                $searchquery = mysqli_query($conn, $query);
            }

            while ($result = mysqli_fetch_array($searchquery)) {
            ?>
                <tr>
                    <td>
                        <div align="center"><?php
                                            echo "<div id='img_div'>";
                                            echo "<img src='images/" . $result['bookCover'] . "' >";
                                            echo "</div>"; ?><div>
                    </td>
                    <td>
                        <div align="center"><a href="book.php?id=<?php echo $result['bookID']; ?>"><?php echo $result["bookName"]; ?></a></div>
                    </td>
                    <td>
                        <div align="center"><?php echo $result["category"]; ?></div>
                    </td>
                    <td>
                        <div align="center"><?php echo $result["author"]; ?></div>
                    </td>
                    <td>
                        <div align="center"><?php echo $result["status"]; ?></div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </form>
    </table>
    <div class="footer">
        <footer>&copy; Copyright 2021 Byoulibrary at CS251 Database</footer>
    </div>
</body>

</html>