<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BZAC Admin Website" />
    <meta name="author" content="Leonille Christie Lavador" />
    
    <title>BZAC - Admin Portal</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container" style="height: 140px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img style="margin-top: -20px; margin-left: 40px;" src="assets/img/logo.png" />
                </a>
                
                <a href="index.php">
                    <h3 style="padding-left: 200px; color: white; position: absolute; padding-top: 20px;">Blessed Zion Academy Cebu <br>Admin Portal</h3>
                </a>
            </div>

        </div>
    </div>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><span class="glyphicon glyphicon-hand-up"></span> Login Page </h4>

                </div>

            </div>
            <div class="row" style="padding-left: 400px;">
                <div class="col-md-6">
                    <label>Enter Username </label>
                    <input type="text" class="form-control" />
                    <label>Enter Password</label>
                    <input type="password" class="form-control" />
                    <div style="margin-top: 15px;margin-left: 270px;">
                        <a href="index.php" class="btn btn-danger"><span class="glyphicon glyphicon-user"></span> &nbsp;Log In </a>&nbsp;
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="text-center">
                <h5>Don't have an account? <a href="register.php">Sign Up</a> here.</h5>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php' ?>
  
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
