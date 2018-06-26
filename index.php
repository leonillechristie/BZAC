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
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index.php">Dashboard</a></li>
                            <li><a href="ui.html">UI Elements</a></li>
                            <li><a href="table.html">Data Tables</a></li>
                            <li><a href="forms.html">Forms</a></li>
                            <li><a href="blank.html">Account</a></li>
                            <li><a href="login.php">Login</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>   

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
                    <h4 class="page-head-line">Student List</h4>

                </div>
            </div>

            <div class="row" >
                <h4 style="position:  absolute; left: 190px;">Grade Level: </h4>
                <select class="form-control" style="width:  200px; margin-left:  120px; margin-bottom:  10px;">
                    <option>Nursery</option>
                    <option>Kinder 1</option>
                    <option>Kinder 2</option>
                    <option>Grade 1</option>
                    <option>Grade 2</option>
                    <option>Grade 3</option>
                    <option>Grade 4</option>
                    <option>Grade 5</option>
                    <option>Grade 6</option>
                </select>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Grade Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td>18-0038</td>
                            <td>Alemania</td>
                            <td>Ziv Samuel</td>
                            <td>Gumela</td>
                            <td>Kinder 2</td>
                            <td class="text-center"> 
                                <a href="#"  class="btn btn-xs btn-danger">View</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>18-0038</td>
                            <td>Alemania</td>
                            <td>Ziv Samuel</td>
                            <td>Gumela</td>
                            <td>Kinder 2</td>
                            <td class="text-center"> 
                                <a href="#"  class="btn btn-xs btn-danger">View</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>18-0038</td>
                            <td>Alemania</td>
                            <td>Ziv Samuel</td>
                            <td>Gumela</td>
                            <td>Kinder 2</td>
                            <td class="text-center"> 
                                <a href="#"  class="btn btn-xs btn-danger">View</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>18-0038</td>
                            <td>Alemania</td>
                            <td>Ziv Samuel</td>
                            <td>Gumela</td>
                            <td>Kinder 2</td>
                            <td class="text-center"> 
                                <a href="#"  class="btn btn-xs btn-danger">View</a> 
                            </td>
                        </tr>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 BZAC | Web Portal</a>
                </div>

            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
