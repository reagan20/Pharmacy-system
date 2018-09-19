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
    
<div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Dispensed summary</h3> 
                </div>

                <!-- BAR Chart -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark">
                                    Annual dispensation rate
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="bg-default" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-bar-example" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                    </div> <!-- col -->
                </div> <!-- End row-->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark">
                                    Monthly dispensation rate
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="bg-default" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-bar-example" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                    </div>
                </div> <!-- End row-->


                <div class="row">
                    <!--  Line Chart -->
                    <div class="col-sm-12">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark">
                                    Today's dispensation rate
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet4" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-line-example" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                    </div>
                </div> <!-- End row-->

                

            </div>
     

     
                
              
             



     
 <!--start of footer-->
          
  <footer class="footer">
                2018 @Pharmacy.
            </footer>
      
 </section>      

    
    <!-- js placed at the end of the document so the pages load faster -->
      
  <script src="js/jquery.js"></script>
       
 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      
  <script src="js/jquery.app.js"></script>

   
 </body>


</html>
