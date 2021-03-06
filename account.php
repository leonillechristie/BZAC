<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <?php include 'header2.php' ?>

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container" style="height:140px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
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
                    <h4 class="page-head-line"><span class="glyphicon glyphicon-user"></span> Admin Account</h4>

                </div>

            </div>
            <div class="row" style="padding-left: 20%;">
                <div class="col-md-8">
                        <label>Username<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" />
                        
                        <label>Password<span style="color: red;">*</span></label>
                        <input type="password" class="form-control" />

                        <label>Confirm Password<span style="color: red;">*</span></label>
                        <input type="password" class="form-control" />

                        <label>First Name<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" />

                        <label>Middle Name</label>
                        <input type="text" class="form-control" />

                        <label>Last Name<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" />

                        <label>Suffix</label>
                        <input type="text" class="form-control" />

                        <label>Birthday<span style="color: red;">*</span></label>
                        <input type="date" class="form-control" />
                        
                        <label>Sex<span style="color: red;">*</span></label>
                            <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        
                        <label>Contact Number<span style="color: red;">*</span></label>
                        <input type="text" class="form-control" />

                        <div style="margin-top: 15px; margin-left: 470px;">
                            <a href="login.php" class="btn btn-danger">&nbsp;Update Account</a>&nbsp;
                        </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
