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
                    <h3 class="title">Order</h3> 
                </div>

                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Order</h3></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Product Name:</label>
                                        <div class="col-md-9">
                                            
                                            <div class=" input-group-btn" >
                                          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="dropdown1"> Item Name<span class="caret"></span>
                                          
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown1">
                                            <li role="Presentation">
                                              <a role="dsfgd" tabindex="-1" href="#">Java</a>
                                            </li>
                                            <ul class="dropdown-menu" role="menu"> 
                                              <li role="presentation">
                                               <a role="menuitem" tabindex="0" href="#">Java</a> </li>
                                          </ul>
                                          </button>
                                          

                                        </div>
                                    </div>
                                  </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-number">Quantity</label>
                                        <div class="col-md-9">
                                            <input type="number" id="quantity" name="Quantity" class="form-control" placeholder="Quantity">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" id="btnAdd" onclick="addOrder(); return false;"></span>+</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                             <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Order</h3></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
          <label class="col-md-2 control-label"></label>
           <div class="col-md-10" >
                <div id="ordered-items">
                    <br /><hr />
                </div>

         <button class="btn btn-primary" id="btnAdd"></span>Order</button>
         </div><!--end col-md-8-->

         </div><!--end form-group-->
       </form><!--end form-horizontal-->
     </div><!--end panel-body-->
   </div><!--end panel-default-->
 </div><!--col-sm-12-->
</div><!--end row-->
</div>

                                   
                                   

     
 <!--start of footer-->
          
  <footer class="footer">
                2018 @Pharmacy System
            </footer>
      
 </section>
        <script>
            function addOrder() {
                var quantity = document.getElementById("quantity");
                var date = document.getElementById("date");
                var item = document.getElementById("dropdown1");

                var divitems = document.getElementById("ordered-items");

                divitems.innerText = divitems.innerText + quantity.value + " " + date.value + " " + item.value;



                //alert(quantity.value + date.value + item.value);
            }
        </script>

    
    <!-- js placed at the end of the document so the pages load faster -->
      
  <script src="js/jquery.js"></script>
   <script src="js/order.js"></script>
       
 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      
  <script src="js/jquery.app.js"></script>

   
 </body>


</html>
