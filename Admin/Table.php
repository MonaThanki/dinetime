
<?php 
     include('Config.php');
     include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include DataTables CSS and JS files -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    </head>

<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Table</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Table</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">LIVE TABLE STATUS</h3>
                  </div>
                </div>

              </div>

              <!--main content-->
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 101</strong></H3>
                      <?php

                      $ID = 1;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>

                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 102</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 103</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 104</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                   
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  1-->

              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 105</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 106</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 107</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 108</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  2-->

              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 109</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 110</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 111</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>

                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 112</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                          if ($status == 'NO BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>';
                          } elseif ($status == 'BOOK') {
                              echo '<button id="toggleButton_' . $ID . '" class="toggleButton btn btn-success btn-sm" style="width: 40%;">BOOK</button>';
                          }
                      ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  3-->

            </div>
            <!-- /.card -->
          </div>
          <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">TableBook Detail</h3>
                  </div>
                </div>
                <div class="card-body card-solid">
                  <table id="example2" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>TABLE NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>DATE</th>
                        <th>PEOPLE</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                      $sql = "select * from booking_details";
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
                              <?php echo $row['table_no'] ?>
                            </td>
                            <td>
                              <?php echo $row['fullname'] ?>
                            </td>
                            <td>
                              <?php echo $row['email'] ?>
                            </td>
                            <td>
                              <?php echo $row['phone'] ?>
                            </td>
                            <td>
                              <?php echo $row['date'] ?>
                            </td>
                            
                            <td>
                              <?php echo $row['people'] ?>
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
                        <th>TABLE NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>DATE</th>
                        <th>PEOPLE</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="text-align: center;">
                  <strong> We are happy to serve you </strong>
                </div>
                <!-- /.card-footer -->
                <!-- </div> -->
                <!-- /.card -->

              </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</body>
<!-- <script>
    jQuery(document).ready(function($) {
        $('#toggleButton').click(function () {
            var button = $(this);
            var status = button.text().trim();

            // Toggle the button text and class
            if (status === 'NO BOOK') {
                button.text('BOOK').removeClass('btn-danger').addClass('btn-success');
            } else {
                button.text('NO BOOK').removeClass('btn-success').addClass('btn-danger');
            }

            // Update the database using AJAX
            var tableId = </?php echo $ID; ?>; 
          // Pass the table ID to the server
            $.ajax({
                type: 'POST',
                url: 'updateStatus.php', // Replace with the server-side script for updating the status
                data: { tableId: tableId, status: status },
                success: function (response) {
                    // Handle the server response if needed
                    console.log('Table ID:', tableId);
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // Handle errors if any
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script> -->
<!-- Add this script at the end of your HTML body or in a separate script file -->
  
<script>
  $(document).ready(function() {
    // Initialize DataTable
    $('#example2').DataTable({
      
      "paging": true,         
      "lengthChange": false, 
      "pageLength": 10        
    });
  });
</script>
<script>
    $(document).ready(function () {
        // Add a class to all toggle buttons for event delegation
        $(document).on('click', '.toggleButton', function () {
            var buttonId = $(this).attr('id'); // Get the clicked button's ID
            var tableId = buttonId.split('_')[1]; // Extract the table ID from the button's ID
            var currentStatus = $('#' + buttonId).hasClass('btn-danger') ? 'BOOK' : 'NO BOOK';
         
            // Make an Ajax request to update the status in the database
            $.ajax({
                type: 'POST',
                url: 'updateStatus.php', // Replace with the server-side script for updating the status
                data: { tableId: tableId, status: currentStatus }, 
                success: function (response) {
                    // Handle the server response if needed
                    console.log(response);

                    // Toggle the button text and class based on the updated status
                    if ($('#' + buttonId).hasClass('btn-danger')) {
                        $('#' + buttonId).removeClass('btn-danger').addClass('btn-success').text('BOOK');
                    } else {
                        $('#' + buttonId).removeClass('btn-success').addClass('btn-danger').text('NO BOOK');
                    }
                },
                error: function (xhr, status, error) {
                    // Handle errors if any
                    console.error(xhr.responseText);
                    alert('Error updating status. Please try again.');
                }
            });
        });
    });
</script>


</html>
