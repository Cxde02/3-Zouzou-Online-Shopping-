<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | 3Zouzou</title>
    <link rel="icon" type="image/x-icon" href="images/e.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include("navbarlogin.php") ?>
<h6 style="text-align: center;" class="text-center bg-warning"><?php display_message(); ?></h6>


<div class="accout-page">
    <div class="container">

        <div class="row">


            <div class="col-2" style="padding-left: 500px;">
                <div class="form-container">
                    <div class="form-btn">
                        <span>Sign Up</span>
                    </div>

                    <form class="" action="" method="post" enctype="multipart/form-data">

                        <?php add_user(); ?>


                        <input type="t" name="username" placeholder="U s e r n a m e" required></label>
                        <input type="t" name="email" placeholder="E - m a i l   A d d r e s s" required></label>
                        <input type="password" name="password" placeholder="P a s s w o r d" required></label>

                        <input type="submit" name="add_user" class="btn btn-primary">


                    </form>
                </div>

            </div>

        </div>
        <br>
        <div class="logincontainer">
            <h5 style="text-align: center;">If you already have an account - <a id="signup" href="login_page.php">
                    Login</a>
            </h5>
        </div>
    </div>
</div>
</div>


<?php include("footer.php") ?>

