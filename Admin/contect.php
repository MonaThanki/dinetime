<?php
include('Header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mt-5">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contect</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Contect</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <!-- /.content -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">CONTACT US DETAILS</h3>
                  </div>
                </div>
                <div class="card-body card-solid">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>SUBJECT</th>
                        <th>MESSAGE</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                      $sql = "select * from contact";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);
                     
                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {
                      ?>
                          <tr>
                            <td>
                              <?php echo $i++; ?>
                            </td>
                            <td>
                              <?php echo $row['CNAME'] ?>
                            </td>
                            <td>
                              <?php echo $row['CEMAIL'] ?>
                            </td>
                            <td>
                              <?php echo $row['CSUBJECT'] ?>
                            </td>
                            <td>
                              <?php echo $row['CMESSAGE'] ?>
                            </td>

                          </tr>
                      <?php

                        }
                      } else {
                        echo "<tr><td colspan=\"5\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>SUBJECT</th>
                        <th>MESSAGE</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="text-align: center;">
                  <strong> PROVIDING BEST SERVICES IS OUR FIRST AIM </strong>
                </div>
                <!-- /.card-footer -->
                <!-- </div> -->
                <!-- /.card -->

              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- Page specific script -->
  <!-- <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["pdf", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     
    });
  </script> -->

</body>

</html>