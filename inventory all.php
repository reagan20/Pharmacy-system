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
                        <a href="inventory.php">
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

      <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Commodities in stock</h3> 
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>DrugId</th>
                                                        <th>Name</th>
                                                        <th>Issue of unit</th>
                                                        <th>View more</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>123456</td>
                                                        <td>Artemether-Lumefantrine 20/120 Tabs</td>
                                                        <td>6s</td>
                                                        <td><a href="inventory.php" class="btn btn-primary btn-custom m-b-5"">View more</a></td>>
                                                    </tr>
                                                    <tr>
                                                        <td>657465</td>
                                                        <td>Sulphadoxine Pyrimethamine</td>
                                                        <td>Tabs</td>
                                                        <td><a href="inventory.php" class="btn btn-primary btn-custom m-b-5"">View more</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>345789</td>
                                                        <td>Dihydroartemesinin/pipera quine 160mg</td>
                                                        <td>Tabs</td>
                                                        <td><a href="inventory.php" class="btn btn-primary btn-custom m-b-5"">View more</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>432097</td>
                                                        <td>Quinine (200mg)</td>
                                                        <td>Tabs</td>
                                                        <td><a href="inventory.php" class="btn btn-primary btn-custom m-b-5"">View more</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>436348</td>
                                                        <td>Quinine inj(600mg/2ml) Amps</td>
                                                        <td>Vials</td>
                                                        <td><a href="inventory.php" class="btn btn-primary btn-custom m-b-5"">View more</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>735929</td>
                                                        <td>RDTs</td>
                                                        <td>Tests</td>
                                                        <td><a href="inventory.php" class="btn btn-primary btn-custom m-b-5"">View more</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->
      </div>

     

     
                
              
             



     
 <!--start of footer-->
          
  <footer class="footer">
                2018 @Shoezone.
            </footer>
      
 </section>      

    
    <!-- js placed at the end of the document so the pages load faster -->
      
  <script src="js/jquery.js"></script>
       
 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      
  <script src="js/jquery.app.js"></script>

   
 </body>


</html>
