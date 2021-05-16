<?php
include('server.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Byoulib</title>
</head>

<body>
    <div class="haeder">
        <h4>Acoount</h4>
    </div>
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
                        <p><a href="login.php" style="color: green;">Login</a></p>
                    </li>
                <?php endif ?>
            </ul>
        </div>
        <div class="header">
            <!--  notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
        </div>
        <div class="content">
            <div class="row">

                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            My Profile
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    $username = mysqli_escape_string($conn,$_SESSION['username']);
                                    $query = "SELECT * FROM member WHERE userName = '$username'";
                                    $userquery = mysqli_query($conn, $query);

                                    $result = mysqli_fetch_array($userquery);
                                }?>

                                <?php echo "Member ID :" . $result['memberID'];?><br>
                                <?php echo "Username :" . $result['userName'];?><br>
                                <?php echo "Full name :" . $result['fullName'];?><br>
                                <?php echo "Email :" . $result['email'];?><br>
                                <?php echo "Phone number :" . $result['phone'];?><br>
                                
                                <?php
                                    mysqli_close($conn);
                                ?>
                                
                            
                                <!-- <button type="submit" name="update" class="btn btn-primary" id="submit">Update Now </button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>