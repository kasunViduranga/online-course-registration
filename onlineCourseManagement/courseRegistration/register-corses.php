<?php
session_start();

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'1997');
define('DB_NAME','onlinecourseManagement');
define('DB_PORT','3306');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME,DB_PORT);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PinCode Conform</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-reboot.css"/>
    <link rel="stylesheet" type="text/css" href="dist/css/normalize.css">
    <link href="dist/style.css" rel="stylesheet" />

    <style>
        body{
            /*height: 2000px;*/
            background-color:#FBFCFC;
        }
        .listyle:hover{
            background-color: #007bff;
        }
        #titeID{
            font-size: 33px;
            font-family: "Bodoni MT";
            margin-top: 10px;
            color: #9fcdff;
        }
        #footerNav{
            top:1400px;
        }
        .content-wrapper {
            margin-top: 40px;
            min-height: 600px;
            padding-bottom: 60px;
        }
        .page-head-line {
            font-weight: 900;
            padding-bottom: 20px;
            border-bottom: 2px solid #721c24;
            text-transform: uppercase;
            color: blue;
            font-size: 30px;
            margin-bottom: 40px;
        }

    </style>
</head>
<body>
<?php require_once "header.php"; ?>


<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Course Registration </h1>
            </div>
        </div>
        <div class="row" >

            <div class="col-md-3"></div>
            <div class="col-md-6" >
                    <div class="panel-heading">
                    </div>
                <div class="panel panel-default" >
                    <font color="green" align="center"></font>
                    <div class="panel-body">
                        <form name="registerForm" method="post" enctype="multipart/form-data" id="registeForm">
                            <div class="form-group">
                                <label for="studentname">Student Name  </label>
                                <input type="text" class="form-control" id="studentname" name="studentname" value=""  />
                            </div>

                            <div class="form-group">
                                <label for="studentregno">Student Reg No   </label>
                                <input type="text" class="form-control" id="studentregno" name="studentregno" value="" />

                            </div>

                            <div class="form-group">
                                <label for="email">Email  </label>
                                <input type="text" class="form-control" id="email" name="email" value="" />
                            </div>

                            <div class="form-group">
                                <label for="studentphoto">Student Photo  </label>
                                    <img src="studentPhoto/noimage.png" width="200" height="200">
                            </div>

                            <div class="form-group">
                                <label for="Session">Session  </label>
                                <select class="form-control" name="session" required="required">
                                    <option value="">Select Session</option>
                                    <?php
                                    $sql=mysqli_query($con,"select * from session");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>
                                        <option value=""> <?php echo htmlentities($row['sessionName']);?> </option>
                                    <?php } ?>
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="Department">Department  </label>
                                <select class="form-control" name="department" required="required">
                                    <option value="">Select Depertment</option>
                                    <?php
                                    $sql=mysqli_query($con,"select * from department");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>
                                        <option value=""> <?php echo htmlentities($row['department']);?> </option>
                                    <?php } ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="Level">Level  </label>
                                <select class="form-control" name="level" required="required">
                                    <option value="">Select Level</option>
                                    <?php
                                    $sql=mysqli_query($con,"select * from level");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>
                                        <option value=""> <?php echo htmlentities($row['levelName']);?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Semester">Semester  </label>
                                <select class="form-control" name="semester" required="required">
                                    <option>Select Semester</option>
                                    <?php
                                    $sql=mysqli_query($con,"select * from semester");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>
                                        <option value=""> <?php echo htmlentities($row['semester']);?> </option>
                                    <?php } ?>

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="Course">Course  </label>
                                <select class="form-control" name="course" id="course" required="required">
                                    <option value="">Select Course</option>
                                    <?php
                                    $sql=mysqli_query($con,"select * from course");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>
                                        <option value=""> <?php echo htmlentities($row['courseName']);?> </option>
                                    <?php } ?>
                                </select>
                                <span id="course-availability-status1" style="font-size:12px;">
                            </div>



                            <button type="submit" name="submit" id="register" class="btn btn-default" style="background-color: #bd2130;color: white;left: 80%;position: relative">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="dist/js/jquery-3.3.1.min.js"rel="script"type="text/javascript"></script>
<script src="dist/js/bootstrap.min.js"rel="script"type="text/javascript"></script>

<script>
    $('#register').click(function () {
        let stuForm = $('#registeForm').serialize();
        $.ajax({
            url: "api/service/CourseRegisterService.php",
            method: "POST",
            async: true,
            data: stuForm
        }).done(function (res) {
            alert(res);
        });
    });
</script>
</body>
</html>
<?php ?>