<?php
    $connect = mysqli_connect("localhost","root","","dhis2");
    $query_losses = "select sum(quantity) as quantity, day from losses_view group by day";
    $query_patients = "select count(registered_day) as quantity, registered_day from patient group by registered_day";
    $result_losses = mysqli_query($connect,$query_losses);
    $result_patients = mysqli_query($connect,$query_patients);
    $chart_data = '';
    $chart_patient = '';
    while ($row = mysqli_fetch_array($result_losses)){
        $chart_data .= "{ day:'".$row["day"]."', quantity:".$row["quantity"]."}, ";
    }
    while ($row = mysqli_fetch_array($result_losses)){
        $chart_patient .= "{ day:'".$row["registered_day"]."', quantity:".$row["quantity"]."}, ";
    }
    print_r($chart_patient);
    ?>
<!DOCTYPE html>

<html lang="en">
   
    <head>
          
        <meta charset="utf-8">
              
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
              
        <meta name="description" content="Pharmacy system">
              
        <meta name="author" content="Pharmacy">

           
        <title>pharmacy</title>
           
        <!-- Bootstrap core CSS -->
           
        <link href="css/bootstrap.min.css" rel="stylesheet">
           
        <link href="css/bootstrap-reset.css" rel="stylesheet">
           
        <!--Icon-fonts css-->
           
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
           
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
           
        <!-- Custom styles-->
           
        <link href="css/style.css" rel="stylesheet">
           
        <link href="css/helper.css" rel="stylesheet">

        <!-- Morris Libraries-->
        <link href="assets/morris/morris.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
           
    </head>

       
    <body class="home">
           
        <!-- Aside Start-->
           
        <aside class="left-panel">
             
            <!-- brand -->
               
            <div class="logo">
                   
                <a href="homepage.html" class="logo-expanded">
                       
                    <p>Pharmacy</p>
                  
                </a>
             
            </div>
              
            <!-- / brand -->
            
              
            <!-- Navbar Start -->
              
            <nav class="navigation">
                   
                <ul class="list-unstyled">
                       
                    <li>
                        <a href="dashboard.php">
                            <i class="ion-home"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                     
                    <li class="has-submenu">
                        <a href="Dispense.php">
                            <i class="fa fa-medkit"></i>
                            <span class="nav-label">Dispense</span>
                        </a>                      
                    </li>
                       
                    <li class="has-submenu">
                        <a href="dispensed summary.php">
                            <i class="ion-cash"></i>
                            <span class="nav-label">Dispensed summary</span>
                        </a>
                    </li>
                       
                    <li class="has-submenu">
                        <a href="add commodity.php">
                            <i class="fa fa-plus-square"></i>
                            <span class="nav-label">Add commodity</span>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="inventory all.php">
                            <i class="fa fa-hospital-o"></i>
                            <span class="nav-label">Inventory</span>
                        </a>
                    </li>

                    <li>
                        <a href="order.php">
                            <i class="fa fa-h-square"></i>
                            <span class="nav-label">Order</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-spin fa-circle-o-notch"></i>
                            <span class="nav-label">Synchronize</span>
                        </a>
                    </li>
                </ul>
                   
                <!-- Search --> 
                <form role="search" class="app-search">
                    
                    <input type="text" placeholder="Search..." class="form-control">
                    
                    <a href="#"><i class="fa fa-search"></i></a>    
                </form>      
            </nav>
       </aside>
          
        <!-- Aside Ends-->
         
       <section class="content">
        <!-- Header -->
               
            <header class="top-head container-fluid">
                   
     	      <button type="button" class="navbar-toggle pull-left">
                      
     			    <span class="sr-only">Toggle navigation</span>
                       
     			    <span class="icon-bar"></span>
                       
     			    <span class="icon-bar"></span>
                       
     			    <span class="icon-bar"></span>         
     	      </button>
      	      <br/>
      	     <!-- Left navbar -->
                <nav class=" navbar-default" role="navigation">
                    <!-- Right navbar -->
                    <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                        <!-- user login dropdown start-->
                        <li class="dropdown text-center">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="" class="img-circle profile-img thumb-sm">
                                <span class="username">John Deo </span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                        <!-- End right navbar -->
                    </nav>      
            </header>

        <!--<div class="container-fluid">
         page heading
         <div class="page-title">
             <h1>Pharmacy </h1>
         </div> -->
                <div class="wraper container-fluid">
                    <div class="page-title"> 
                        <h3 class="title">Welcome !</h3> 
                    </div>



                    <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3 col-sm-6">
                                <div class="btn-group dropdown">
                                    
                                    <select class="form-control">
                                        <option value="1">Select Facility</option>
                                        <option value="1">Nala Hospital</option>
                                        <option value="1">Kakamega General Hospital</option>
                                        <option value="1">Lupe Clinic</option>
                                    </select>
                                </div>
                            </div>
                      
                            <div class="col-lg-3 col-sm-6">
                                <div class="btn-group dropdown">
                                    <select class="form-control">
                                        <option value="1">Select Item</option>
                                        <option value="1">Dispense rate</option>
                                        <option value="1">Losses</option>
                                        <option value="1">Patients</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="btn-group dropdown">
                                    <select class="form-control">
                                        <option value="1">Select Year</option>
                                        <option value="1">2018</option>
                                        <option value="1">2017</option>
                                        <option value="1">2016</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="btn-group dropdown">
                                    <select class="form-control">
                                        <option value="1">Select Month</option>
                                        <option value="1">January</option>
                                        <option value="1">February</option>
                                        <option value="1">March</option>
                                        <option value="1">April</option>
                                        <option value="1">May</option>
                                        <option value="1">June</option>
                                        <option value="1">July</option>
                                        <option value="1">August</option>
                                        <option value="1">September</option>
                                        <option value="1">October</option>
                                        <option value="1">November</option>
                                        <option value="1">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-5">
                            <div class="portlet"><!-- /primary heading -->
                                <div class="portlet-heading">
                                    <h3 class="portlet-title text-dark text-uppercase">
                                        Paitents Served Summary
                                    </h3>
                                    <div class="portlet-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="portlet2" class="panel-collapse collapse in">
                                    <div class="portlet-body">
                                        <div id="patient" style="height: 320px;">

                                        </div>

                                    </div>
                                </div>
                            </div> <!-- /Portlet -->
                            
                        </div>


                        <div class="col-lg-5">
                            <div class="portlet"><!-- /primary heading -->
                                <div class="portlet-heading">
                                    <h3 class="portlet-title text-dark text-uppercase">
                                        General Losses incured
                                    </h3>
                                    <div class="portlet-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="portlet1" class="panel-collapse collapse in">
                                    <div class="portlet-body">
                                        <div id="losses" style="height: 320px;">

                                        </div>


                                    </div>
                                </div>
                            </div> <!-- /Portlet -->

                        </div> <!-- end col -->
                        <div>
                            <div class="col-lg-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Key</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="dispensing" class="col-sm-9 control-label">Dispensing rate</label>
                                                <div class="col-sm-3">
                                                    <input type="" class="form-control" id="dispensing" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Orders" class="col-sm-9 control-label">Order</label>
                                                <div class="col-sm-3">
                                                    <input type="" class="form-control" id="order" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="losses" class="col-sm-9 control-label">Losses</label>
                                                <div class="col-sm-3">
                                                    <input type="" class="form-control" id="losses" placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End row -->

                    <!--<div class="row">
                         <div class="col-lg-5">
                            <div class="portlet"><!-- /primary heading -->
                   <!--             <div class="portlet-heading">
                                    <h3 class="portlet-title text-dark text-uppercase">
                                        Quarterly summary
                                    </h3>
                                    <div class="portlet-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                          
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="portlet2" class="panel-collapse collapse in">
                                    <div class="portlet-body">
                                        <div id="morris-area-example" style="height: 320px;"></div>

                                    </div>
                                </div>
                            </div> <!-- /Portlet -->
                            
                      <!--  </div>


                        <div class="col-lg-5">
                            <div class="portlet"><!-- /primary heading -->
                      <!--          <div class="portlet-heading">
                                    <h3 class="portlet-title text-dark text-uppercase">
                                        Annual summary
                                    </h3>
                                    <div class="portlet-widgets">
                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="portlet1" class="panel-collapse collapse in">
                                    <div class="portlet-body">
                                        <div id="morris-bar-example" style="height: 320px;"></div>

                                        <!--<div class="row text-center m-t-30 m-b-30">
                                            <div class="col-sm-3 col-xs-6">
                                                <h4>22000/=</h4>
                                                <small class="text-muted"> Today's Orders</small>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <h4>50000/=</h4>
                                                <small class="text-muted">This Week's Orders</small>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <h4>100000/=</h4>
                                                <small class="text-muted">This Month's Orders</small>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <h4>500000/=</h4>
                                                <small class="text-muted">This Year's Orders</small>
                                            </div>
                                        </div>-->
                   <!--                 </div>
                                </div>
                            </div> <!-- /Portlet -->
<!--
                        </div> <!-- end col -->
             <!--           <div>
                            <div class="col-lg-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Key</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="dispensing" class="col-sm-9 control-label">Dispensing rate</label>
                                                <div class="col-sm-3">
                                                    <input type="" class="form-control" id="dispensing" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Orders" class="col-sm-9 control-label">Order</label>
                                                <div class="col-sm-3">
                                                    <input type="" class="form-control" id="order" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="losses" class="col-sm-9 control-label">Losses</label>
                                                <div class="col-sm-3">
                                                    <input type="" class="form-control" id="losses" placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End row -->



                   

                </div>
                <!-- Page Content Ends -->
         

         
                    
                  
                 



         
     <!--start of footer-->
              
      <footer class="footer">
                    2018 @Pharmacy.
                </footer>
          
     </section>      

        <!-- js placed at the end of the document so the pages load faster -->
          
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/modernizr.min.js"></script>
            <script src="js/pace.min.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/jquery.scrollTo.min.js"></script>
            <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
            <script src="assets/chat/moment-2.2.1.js"></script>

            <!-- Counter-up -->
            <script src="js/waypoints.min.js" type="text/javascript"></script>
            <script src="js/jquery.counterup.min.js" type="text/javascript"></script>

            <!-- Dashboard -->
            <script src="js/jquery.dashboard.js"></script>
                    <!-- Counter-up -->
            <script src="js/waypoints.min.js" type="text/javascript"></script>
            <script src="js/jquery.counterup.min.js" type="text/javascript"></script>

            <!-- EASY PIE CHART JS -->
            <script src="assets/easypie-chart/easypiechart.min.js"></script>
            <script src="assets/easypie-chart/jquery.easypiechart.min.js"></script>
            <script src="assets/easypie-chart/example.js"></script>


            <!--C3 Chart-->
            <script src="assets/c3-chart/d3.v3.min.js"></script>
            <script src="assets/c3-chart/c3.js"></script>

            <!--Morris Chart-->
            <script src="assets/morris/morris.min.js"></script>
            <script src="assets/morris/raphael.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

            <!-- sparkline --> 
            <script src="assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
            <script src="assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script> 

            <!-- sweet alerts -->
            <script src="assets/sweet-alert/sweet-alert.min.js"></script>
            <script src="assets/sweet-alert/sweet-alert.init.js"></script>

            <script src="js/jquery.app.js"></script>


        <script>
            new Morris.Line({
                // ID of the element in which to draw the chart.
                element: 'patient',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: [
                    { day: '1st', value: 20 },
                    { day: '2nd', value: 10 },
                    { day: '3rd', value: 5 },
                    { day: '4th', value: 5 },

                ],
                // The name of the data record attribute that contains x-values.
                xkey: 'day',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['value'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Value'],
                hideHover:'auto',
            });

            Morris.Bar({
               element: 'losses',
                data:[<?php echo $chart_data; ?>],
                xkey:'day',
                ykeys:['quantity'],
                labels:['Quantity'],
                hideHover:'auto',

            });

        </script>


    </body>


</html>
