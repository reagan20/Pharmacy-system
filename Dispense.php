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

    <?php
        $connect = mysqli_connect("localhost","root","","dhis2");
        $query = "select * from served_patients";
        $result = mysqli_query($connect,$query);
        session_start();



        if (isset($_POST['submit'])){
            $myId = $_POST['id'];
            $_SESSION['id'] = $myId;
            header("Location:Point of Sale.php");
            exit();
        }
    ?>
   
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
    

   <div class="row">
      <div class="col-md-2">
        
      </div>
      <div class="col-md-8">
          <div class="container-fluid">

     
      <div class="heading"> <h1 class="lead">Dispense drugs</h1>

      <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>PATIENT ID</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>AGE</th>
                                                    <th>GENDER</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>


                                            <?php
                                                while ($row = mysqli_fetch_array($result)){?>
                                                    <tr>
                                                        <form method="post" action="" >
                                                            <td><input type="text" name="id" id="myId" value="<?php echo $row['patient_id']?>"/></td>
                                                            <td><?php echo $row["patient_fname"]?></td>
                                                            <td><?php echo $row["patient_lname"]?></td>
                                                            <td><?php echo $row["age"]?></td>
                                                            <td><?php echo $row["gender"]?></td>
                                                            <td><button type="submit" name="submit"><span class="button btn-warning" onclick="viewDetails()"> Serve Patient</span></button></td>
                                                        </form>
                                                    </tr>
                                                <?php
                                                }
                                            ?>


                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
         
    
     

     </div><!--end Container-fluid-->
      </div>
      <div class="col-md-4">
          
      </div>
   </div>



    
                
              
             



     
 <!--start of footer-->
          
  <footer class="footer">
                2018 @Pharmacy System
            </footer>
      
 </section>

        <script>
            function viewDetails(var myId) {
                alert(myId);
            }
        </script>

    
    <!-- js placed at the end of the document so the pages load faster -->
      
  <script src="js/jquery.js"></script>
       
 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      
  <script src="js/jquery.app.js"></script>

   
 </body>


</html>
