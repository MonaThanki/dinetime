<?php 
     include('Config.php');
     include('header.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<!-- <body class="hold-transition sidebar-large layout-fixed"> -->
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                 <h4>Total Orders</h4>
                  <?php
                    
                    $sql="SELECT OID FROM ORDR ORDER BY OID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="./order.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                <h4>Total Parcel</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT PID FROM PARCEL ORDER BY PID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="./parcel.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>  
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                <h4>Total Food Item</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT MID FROM MENU ORDER BY MID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                </div>
                <div class="icon">      
                <i class="fas fa-utensils"></i>
                </div>
                <a href="./menu.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <h4>Total Staff</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT SID FROM staff ORDER BY SID";
                    $result=mysqli_query($lk,$sql);
                    $cnt2 = mysqli_num_rows($result);
                   
                    echo '<h2>'.$cnt2.'<h2>';

                  ?>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="./staff.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <!-- ./col -->
        </div>

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="index.php">Dine In The Restaurant management system</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</body>


</html>
