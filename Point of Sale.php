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
    session_start();
    $id = $_SESSION['id'];
    $connect = mysqli_connect("localhost","root","","dhis2");
    $query = "SELECT * FROM served_patients WHERE patient_id = ".$id;
    $result = mysqli_query($connect,$query);
    $name = '';
    $age = '';
    $gender = '';
    $ailment = '';
    $medication = '';
    $doctor = '';
    $visit_date = '';

    while ($row = mysqli_fetch_array($result)){
        $name = $row['patient_fname'].' '.$row['patient_lname'];
        $age = $row['age'];
        $gender = $row['gender'];
        $ailment = $row['results'];
        $medication = $row['name'];
        $doctor = $row['doc_fname'].' '.$row['doc_lname'];
        $visit_date = $row['registered_day'].' '.$row['month'].' '.$row['year'];
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
          <div class=" wrapper container-fluid">

     <!--page heading-->
     <div class="panel panel-default" id="panel1">
      <div class="heading"> <h1 id="heading1">Patient Details</h1>
      </div><!--end panel-heading-->
      <div class="panel-body">
     
     <div class="row centered-form" id="dataInput">

       <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-4 col-md-offset-4 " >

        

        <form role="form-horizontal">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
          
           
         <div class="form-group"  >
          <label for="patientName" >Name:</label>
          
           <input type="text" class="form-group" placeholder="Patient Name" id="patientName" contenteditable="false" value="<?php echo $name; ?>">
           

         </div>


         <div class="form-group"  >
          <label for="patientName" >Age</label>
          
           <input type="number" class="form-group" placeholder="Age" id="age" contenteditable="false" value="<?php echo $age; ?>">
           

         </div>


         <div class="form-group"  >
          <label for="patientName" >Gender:</label>
          
           <input type="dropdown" class="form-group" placeholder="Gender" id="gender" contenteditable="false" value="<?php echo $gender; ?>">
           

         </div>

           <div class="form-group">
          <label class="control-label">Ailment</label>
         <textarea class="form-control" rows="5" cols="10" contenteditable="false" value="<?php echo $ailment; ?>">
           
         </textarea>

         </div><!--end form-group-->
 
           <div class="form-group" >
             <label for="dosage">Medication</label> 
           <input type="textArea" class="form-group" placeholder="Medication" id="dosage" contenteditable="false" value="<?php echo $medication; ?>">
         </div>
         

         <div class="form-group"  >
          <label for="patientName" >Doctor:</label>
          
           <input type="text" class="form-group" placeholder="Doctor Name" id="gender" contenteditable="false" value="<?php echo $doctor; ?>">
           

         </div>

           <div class="form-group"  >
             <label for="date">Date:</label>
           <input type="Date" class="form-group " placeholder="Date" id="date">
         </div>

         <input type="submit" value="Submit" class="btn btn-primary" id="buttonSubmit" onclick="confirm()">
     
      </div><!--end col-xs-6 col-sm-6 col-md-6-->
      </div><!--end row form-->
    </form><!--end form-role-->
       </div><!--col-xs-12 col-sm-8 col-md-4 col-sm-offset-4 col-md-offset-4-->
     </div><!--ends row centered-form-->
    </div><!--end panel-body-->
     
      </div><!--end panel default-->

     </div><!--end Container-fluid-->
     



    
                
              
             



     
 <!--start of footer-->
          
  
      
 </section>

        <script>
            function confirm() {
                alert("Are you sure?");
                header("Location:Dispense.php");
                exit();
                //redirect('Dispense.php');
            }
        </script>

    
    <!-- js placed at the end of the document so the pages load faster -->
      
  <script src="js/jquery.js"></script>
       
 <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      
  <script src="js/jquery.app.js"></script>

   
 </body>


</html>
