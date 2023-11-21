<?php

include('Header.php');
include('editwaiter.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>DineTime</title>

    <script language="javascript">
        function Chk() {
            var p = confirm('ARE YOU SURE TO DELETE THIS RECORD?');

            if (p) {
                return true;
            } else {
                return false;
            }
        }
    </script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.waiter_data', function() {
                var vw_id = $(this).attr("id");
                if (vw_id != '') {
                    $.ajax({
                        url: "viewstaff.php",
                        method: "POST",
                        data: {
                            vw_id: vw_id
                        },
                        success: function(data) {
                            $('#waiter_detail').html(data);
                            $('#waitermodal').modal('show');
                        }
                    });
                }
            });

         

            $(document).on('click', '.w_edit_data', function() {
                var edit_id = $(this).attr("id");
                if (edit_id != '') {
                    $.ajax({
                        url: "editwaiter.php",
                        method: "POST",
                        data: {
                            edit_id: edit_id
                        },
                        success: function(data) {
                            $('#waiter_edit_detail').html(data);
                            $('#waitereditmodal').modal('show');
                        }
                    });
                }
            });

            $(document).on('click', '#btnedit', function() {


                var edit_id = $("#ewid").val();
                var edit_fname = $("#ewfname").val();
                var edit_lname = $("#ewlname").val();
                var edit_email = $("#ewemail").val();
                var edit_passwd = $("#ewpasswd").val();
                var edit_address = $("#ewadd").val();
                var edit_gender = $("#ewgen").val();
                var edit_age = $("#ewage").val();
                var edit_contact = $("#ephone").val();
                var edit_expiernce = $("#ewexp").val();
                var edit_hiredate = $("#ewhiredate").val();
                var edit_salary = $("#ewsal").val();
 
                
                $.ajax({

                    url: "updatewaiter.php",
                    method: "POST",
                    data: {
                        id: edit_id,
                        fname: edit_fname,
                        lname: edit_lname,
                        email: edit_email,
                        passwd: edit_passwd,
                        add: edit_address,
                        gender: edit_gender,
                        age: edit_age,
                        contact: edit_contact,
                        exp: edit_expiernce,
                        hdate: edit_hiredate,
                        sal: edit_salary
                    },
                    success: function(data) {
                        location.reload();
                        alert("Record Updated Successfully.");

                    }
                });

            });
        });

    </script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Staff</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Staff</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">STAFF</h3>
                                        <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#AddWaiterModal"> + ADD STAFF </button>
                                    </div>
                                </div>

                                <?php
                                    if(isset($_REQUEST['staffw']))
                                    {
                                ?>
                                    <script>alert("Record Inserted Successfully.");</script>
                                <?php
                                    }
                                ?>

                                <?php
                                    if(isset($_REQUEST['stafw']))
                                    {
                                ?>
                                    <script>alert("Something Went Wrong.");</script>
                                <?php
                                    }
                                ?>

                       

                                <!-- Modal Staff insert -->
                                <div class="modal fade" id="AddWaiterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form name="AddWaiter" method="post" action="addwaiter.php" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control" name="wfname" id="wfname" placeholder="Enter First Name" pattern="[A-Za-z ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control" name="wlname" id="wlname" placeholder="Enter Last Name" pattern="[A-Za-z ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="text" class="form-control" name="passwd" id="passwd" placeholder="Enter a password" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="textarea" class="form-control" name="wadd" id="wadd" placeholder="Enter Address" pattern="[A-Za-z ]\.\,{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Gender</label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" id="femaleRadio" <?php if (isset($gender) && $gender == "FEMALE") echo "checked"; ?> value="FEMALE">
                                                            <label class="form-check-label" for="femaleRadio">Female</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" id="maleRadio" <?php if (isset($gender) && $gender == "MALE") echo "checked"; ?> value="MALE">
                                                            <label class="form-check-label" for="maleRadio">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" id="otherRadio" <?php if (isset($gender) && $gender == "OTHER") echo "checked"; ?> value="OTHER">
                                                            <label class="form-check-label" for="otherRadio">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" name="wage" id="wage" placeholder="Enter Age" pattern="[0-9]{0,}"required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Contact" pattern="[0-9]{10}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Expiernce</label>
                                                        <input type="text" class="form-control" name="wexp" id="wexpiernce" placeholder="Enter Expiernce" pattern="[A-Za-z0-9 ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hiredate</label>
                                                        <input type="date" class="form-control" name="whdate" id="whiredate" placeholder="Enter Hiredate" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Salary</label>
                                                        <input type="text" class="form-control" name="wsal" id="wsalary" placeholder="Enter Salary" pattern="[0-9]{0,}" required>
                                                    </div>
                                                    <div class="text-center">
                                                        <input type="submit" name="waiter_submit" class="btn-block btn btn-primary" value="ADD WAITER">
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped">


                                        <thead>
                                            <tr>
                                                <th>SR. NO</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PASSWORD</th>
                                                <th>CONTACT</th>
                                                <th>EXPIERNCE</th>
                                                <th>SALARY</th>
                                                <th>OPERATION</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php

                                            $sql = "select * from Staff";
                                            $res = mysqli_query($lk, $sql);
                                            $cnt = mysqli_num_rows($res);

                                            if ($cnt > 0) {

                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $no = $row['SID'];
                                                    $sql1 = "select * from STAFF where SID=$no";
                                                    $res1 = mysqli_query($lk, $sql1);
                                                    $ans = mysqli_fetch_array($res1);

                                            ?>

                                                    <tr>

                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $row['FNAME'] ?> &nbsp; <?php echo $row['LNAME'] ?></td>
                                                        <td><?php echo $row['EMAIL'] ?></td>
                                                        <td><?php echo $row['PASSWD'] ?></td>
                                                        <td><?php echo $row['CONTACT'] ?></td>
                                                        <td><?php echo $row['EXPIERNCE'] ?></td>
                                                        <td><?php echo $row['SALARY'] ?></td>
                                                        <td>
                                                            <input type="button" name="view" value="VIEW" id="<?php echo $row['SID']; ?>" class="btn btn-primary btn-sm waiter_data" />

                                                            <!-- Modal View -->
                                                            <div class="modal fade" id="waitermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">View Staff</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" id="waiter_detail">

                                                                            <form name='viewFood' method='post' enctype='multipart/form-data'>

                                                                            </form>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="button" name="edit" value="EDIT" id="<?php echo $row['SID']; ?>" class="btn btn-info btn-sm w_edit_data" />

                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="waitereditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" id="waiter_edit_detail">

                                                                            <form name='viewFood' action="./updatewaiter.php" method='post' enctype='multipart/form-data'>

                                                                            </form>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-danger btn-sm" href="deletestaff.php?delWID=<?php echo $row['SID']; ?>" onclick="return Chk();">
                                                                Delete
                                                            </a>
                                                        </td>

                                                    </tr>
                                            <?php

                                                }
                                            } else {
                                                echo "<tr><td colspan=\"12\"> NO ONE RECORD IN TABLE </td></tr>";
                                            }

                                            ?>

                                        </tbody>

                                        <tfoot>
                                        <tr>
                                                <th>SR. NO</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PASSWORD</th>
                                                <th>CONTACT</th>
                                                <th>EXPIERNCE</th>
                                                <th>SALARY</th>
                                                <th>OPERATION</th>
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
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
<<<<<<< HEAD
 <!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="index.php">Dine In The Restaurant management system</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
=======

>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["pdf", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["pdf", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        });
    </script>
</body>

</html>