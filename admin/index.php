<?php
include('../config/config.php');
include('header.php');
include('insert_customer.php');


?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('nav-bar.php');
include ('sidebar.php'); ?>
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <div class="row md-6">
          <div class="col-md-6">
            <h1 class="m-0 text-dark">MR. C Information System</h1><br>
              
          </div><!-- /.col -->
            
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
            <div class="row">
            <div class="col-12">
          <div class="card card-primary">
               <div class="card-header">
                <h3 class="card-title">Search Customer</h3>
              </div>
               <?php include('tbl_customer.php');?>

                     </div>
          
        </div>   
                </div>
        
        
        <!-- Small boxes (Stat box) -->
       
       <?php include('add_customer_modal.php');?>
     
    </section>
    <!-- /.content -->
  </div>




<?php 
  
    include('footer.php');
    ?>