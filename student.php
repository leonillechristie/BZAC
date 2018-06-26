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
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="account.php">Account</a></li>
                            <li><a href="login.php">Logout</a></li>

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
                    <h4 class="page-head-line"><span class="glyphicon glyphicon-list-alt"></span> Student Details</h4>

                    <div class="row" style="margin-top: -30px;">
                        <div class="col-md-6">
                            <h3>Student Information</h3>
                            <label>Student ID</label>
                            <input type="text" class="form-control" />
                            
                            <label>Grade Level</label>
                            <select class="form-control">
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

                            <label>First Name</label>
                            <input type="text" class="form-control" />

                            <label>Middle Name</label>
                            <input type="text" class="form-control" />

                            <label>Last Name</label>
                            <input type="text" class="form-control" />

                            <label>Suffix</label>
                            <input type="text" class="form-control" />

                            <label>Birthday</label>
                            <input type="date" class="form-control" />
                            
                            <label>Age</label>
                            <input type="text" class="form-control" />
                            
                            <label>Address</label>
                            <textarea class="form-control" rows="2" placeholder="Text Area"></textarea>

                        </div>
                   
                        <div class="col-md-6">
                        <h3 style="color: white">Continued</h3>   
                                <label>Contact Number</label>
                                <input type="text" class="form-control" />

                                <label>Mother's Name</label>
                                <input type="text" class="form-control" />
                                
                                <label>Mother's Occupation</label>
                                <input type="password" class="form-control" />
                                
                                <label>Father's Name</label>
                                <input type="password" class="form-control" />

                                <label>Father's Occupation</label>
                                <input type="text" class="form-control" />

                                <label>Guardian's Name</label>
                                <input type="text" class="form-control" />

                                <label>Relationship with Guardian</label>
                                <input type="text" class="form-control" />
                                
                                <label>Religion</label>
                                <input type="text" class="form-control" />

                            <!-- <div style="margin-top: 30px; margin-left: 410px;">
                                <a href="login.php" class="btn btn-danger">Update Information</a>&nbsp;
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"></h4>

                    <div class="row" style="margin-top: -30px;">
                        <div class="col-md-6">
                            <h3>Student Fees</h3>
                            <label>Entrance Fee</label>
                            <input type="text" class="form-control" />
                            
                            <label>Miscellaneous</label>
                            <input type="text" class="form-control" />

                            <label>Tuition</label>
                            <input type="text" class="form-control" />
                            
                            <label>Books</label>
                            <input type="text" class="form-control" />
                            
                            <label>School Supplies</label>
                            <input type="text" class="form-control" />

                            <label>Total</label>
                            <input type="text" disabled="1" placeholder="P 0,000.00" class="form-control" />
                        </div>
                   
                        <div class="col-md-6">
                        <h3 style="">Payments</h3>   
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Beginning Balance: P 0,000.00
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>OR No.</th>
                                                    <th>Amt Paid</th>
                                                    <th>Balance</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>June 26, 2018</td>
                                                    <td>0129</td>
                                                    <td>P 1,000.00</td>
                                                    <td>P 2,000.00</td>
                                                    <td>None</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div style="margin-top: 15px; margin-left: 395px;">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Add Payment</button>
                                        </div>
                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Payment Details</h4>
                                              </div>
                                              <div class="modal-body">
                                                <label>Date </label>
                                                <input type="date" class="form-control" />
                                                <label>OR Number</label>
                                                <input type="text" class="form-control" />
                                                <label>Amount Paid</label>
                                                <input type="text" class="form-control" />
                                                <label>Balance</label>
                                                <input type="text" class="form-control" />
                                                <label>Remarks</label>
                                                <input type="text" class="form-control" />

                                              </div>
                                              <div class="modal-footer">
                                                <div style="margin-top: 15px;margin-left: 270px;">
                                                    <a href="index.php" class="btn btn-danger" data-dismiss="modal" ><span class="glyphicon glyphicon-ok"></span> &nbsp;Add Payment </a>&nbsp;
                                                </div>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 400px; margin-left: 975px;">
                            <a href="login.php" class="btn btn-danger"><h4>Update Information</h4></a>&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>