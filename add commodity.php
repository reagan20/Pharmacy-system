<!DOCTYPE html>

<html lang="en">
   
 
<head>
      
  <meta charset="utf-8">
      
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  <meta name="description" content="Online shoe sale">
      
  <meta name="author" content="Shoezone">

       
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

        <link href="css/main.css" rel="stylesheet">
   
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



         
   </header>
    



    <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Add Commodity</h3> 
                </div>

                <div class="row">
                    <!-- Basic example -->
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Add new Commodity</h3></div>
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="drugName1">Drug Name</label>
                                        <input type="text" class="form-control" id="drugName1" placeholder="Enter Drug Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="unitOfIssue">Unit of Issue</label>
                                        <input type="text" class="form-control" id="unitOfIssue" placeholder="Enter unit of issue">
                                    </div>
                                    <div class="form-group">
                                        <label for="unitOfPrice">Unit of Price</label>
                                        <input type="text" class="form-control" id="unitOfPrice" placeholder="Enter unit of price">
                                    </div>
                                    <div class="form-group">
                                        <label for="unitOfIssue">Type of Drug</label>
                                        <input type="text" class="form-control" id="unitOfIssue" placeholder="Enter Type of Drug">
                                    </div>
                                    <label for=""></label>
                                    <label for="unitOfPrice">Type of Commodity</label>
                                    <div class="input-group m-t-10">
                                      <input type="text" name="commdityType" placeholder="Commodity Type" class="form-control">
                                        <div class=" input-group-btn">
                                          <button type="button" class="btn btn-effect-ripple btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"> <span class="caret"></span></button>
                                        </div><!--end input-group-button-->
                                    </div>
                                    <button type="submit" class="btn btn-purple">Submit</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->
             



     
 <!--start of footer-->
          
  <footer class="footer">
                2018 @Pharmacy System
            </footer>
      
 </section>      

    
    <!-- js placed at the end of the document so the pages load faster -->
      
  <script src="js/jquery.js"></script>
       
 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      
  <script src="js/jquery.app.js"></script>

   
 </body>


</html>
