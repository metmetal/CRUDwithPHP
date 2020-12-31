
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: rgb(0,128,255);
    }
    </style>
</head>

<body>

    
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.html"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a><span class="splash-description">Veuillez entrer vos informations:</span></div>
            <div class="card-body">
                <form method="post" action="Vue.php?update=<?php echo ($_GET['modif'])?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="newnom" type="text" value="<?php echo($_GET['modnom'])?>" autocomplete="on">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="newprenom"type="text" value="<?php echo($_GET['modpren'])?>" autocomplete="on">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="newadresse" type="text" value="<?php echo($_GET['modad'])?>">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <!--<button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>-->
                    <input type="submit" name="modifier" value="Modifier">
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>

  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>