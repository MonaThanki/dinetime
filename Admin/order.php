<?php
  include('Config.php');
  include('header.php');
  require('fpdf185/fpdf.php');
?>
<!DOCTYPE html>
<html lang="en">

<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
<<<<<<< HEAD
    <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">ORDER</h3>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>TABLE</th>
                        <th>STATUS</th>
                        <th>ORDERS</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                      $sql = "select * from ORDR";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {

                          $status = $row['STATUS'];
                          $oid = $row['OID'];

                      ?>

                          <?php

                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td>
                            <?php

                              $sql2 = "select * from tables where TID = {$row['TID']}";
                              $res1 = mysqli_query($lk,$sql2);
                              $ans1 = mysqli_fetch_assoc($res1);

                              echo $ans1['TABLE_NO'];

                            ?>
                            </td>
                            <td>

                              <?php
                              if (($status) == '0') {
                              ?>
                                <button class="btn btn-danger btn-sm"><i class="far fa-eye-slash"></i></button>
                              <?php
                              }
                              if (($status) == '1') {
                              ?>
                                <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <form action="index.php" method="POST" name="frm">
                                
                                <input  class="btn btn-success btn-sm" type='button' name="btn" onclick="location.href='order.php?id=<?php echo $row['OID']; ?>'" value="VIEW ORDER"/>
                              </form>
                              
                            </td>
                          </tr>
                        <?php

                        }
                        ?>

                        <?PHP

                        ?>
                      <?php
                      } else {
                        echo "<tr><td colspan=\"8\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>TABLE</th>
                        <th>STATUS</th>
                        <th>OPRDERS</th>
                      </tr>

                    </tfoot>
                  </table>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>ITEAM NAME</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                      </tr>
                    </thead>

                    <tbody >

                      <?php
                      
                      if (isset($_REQUEST['id'])) 
                      { 
                        $sql1 = "select * from ORDRDLT WHERE OID = {$_REQUEST['id']}";
                        $res = mysqli_query($lk,$sql1);
                        $i = 1;
                        $total = 0;
                        ?>
                        <tr align="center">                             
                            <th colspan="4"> <?php echo "Order No :&nbsp;" .  $_REQUEST['id']; ?> </th>
                        </tr>
                      <?php

                        while($ans = mysqli_fetch_assoc($res))
                        {                          
                      ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $ans['MNAME']; ?></td>
                            <td><?php echo $ans['QNTY']; ?></td>
                            <td><?php echo $ans['TOTAL']; ?></td>
                          </tr>                          
                      <?php
                          $total = $total + $ans['TOTAL'];
                        }
                      ?>
                          <tr style="background-color:#e6ffe6; font-weight: 900;">                          
                            <td colspan="3" align="right">Total</td>
                            <td>$ <?php echo number_format($total, 2); ?></td>                          
                          </tr>
                      <?php
                      }  
                      else {
                        echo "<tr><td colspan=\"4\"> NO ONE RECORD IN TABLE </td></tr>";
                      }                      
                      ?>


                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>ITEAM NAME</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                      </tr>

                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
=======
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-title">ORDER</h3>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                    <tr>
                      <th>SR. NO</th>
                      <th>TABLE</th>
                      <th>STATUS</th>
                      <th>ORDERS</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php

                    $sql = "select * from ORDR";
                    $res = mysqli_query($lk, $sql);
                    $cnt = mysqli_num_rows($res);

                    if ($cnt > 0) {

                      $i = 1;
                      while ($row = mysqli_fetch_assoc($res)) {

                        $status = $row['STATUS'];
                        $oid = $row['OID'];

                    ?>

                        <?php

                        ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td>
                            <?php

                            $sql2 = "select * from tables where TID = {$row['TID']}";
                            $res1 = mysqli_query($lk, $sql2);
                            $ans1 = mysqli_fetch_assoc($res1);

                            echo $ans1['TABLE_NO'];

                            ?>
                          </td>
                          <td>

                            <?php
                            if (($status) == '0') {
                            ?>
                              <button class="btn btn-danger btn-sm"><i class="far fa-eye-slash"></i></button>
                            <?php
                            }
                            if (($status) == '1') {
                            ?>
                              <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                            <?php
                            }
                            ?>
                          </td>
                          <td>
                            <form action="index.php" method="POST" name="frm">

                              <input class="btn btn-success btn-sm" type='button' name="btn" onclick="location.href='order.php?id=<?php echo $row['OID']; ?>'" value="VIEW ORDER" />
                            </form>

                          </td>
                        </tr>
                      <?php

                      }
                      ?>

                      <?PHP

                      ?>
                    <?php
                    } else {
                      echo "<tr><td colspan=\"8\"> NO ONE RECORD IN TABLE </td></tr>";
                    }

                    ?>

                  </tbody>

                  <tfoot>
                    <tr>
                      <th>SR. NO</th>
                      <th>TABLE</th>
                      <th>STATUS</th>
                      <th>OPRDERS</th>
                    </tr>

                  </tfoot>
                </table>

              </div>
              <!-- /.card-body -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                    <tr>
                      <th>SR. NO</th>
                      <th>ITEAM NAME</th>
                      <th>QUANTITY</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php

                    if (isset($_REQUEST['id'])) {
                      $sql1 = "select * from ORDRDLT WHERE OID = {$_REQUEST['id']}";
                      $res = mysqli_query($lk, $sql1);
                      $i = 1;
                      $total = 0;
                    ?>
                      <tr align="center">
                        <th colspan="4"> <?php echo "Order No :&nbsp;" .  $_REQUEST['id']; ?> </th>
                      </tr>
                      <?php

                      while ($ans = mysqli_fetch_assoc($res)) {
                      ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $ans['MNAME']; ?></td>
                          <td><?php echo $ans['QNTY']; ?></td>
                          <td><?php echo $ans['TOTAL']; ?></td>
                        </tr>
                      <?php
                        $total = $total + $ans['TOTAL'];
                      }
                      ?>
                      <tr style="background-color:#e6ffe6; font-weight: 900;">
                        <td colspan="3" align="right">Total</td>
                        <td>$ <?php echo number_format($total, 2); ?></td>
                      </tr>
                    <?php
                    } else {
                      echo "<tr><td colspan=\"4\"> NO ONE RECORD IN TABLE </td></tr>";
                    }
                    ?>


                  </tbody>

                  <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th><input class="btn btn-success btn-sm" type='button' name="btn" onclick="location.href='orderpdf.php'" value="PRINT ORDER" /></th>
                    </tr>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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