<?php
session_start();

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'1997');
define('DB_NAME','onlinecourseManagement');
define('DB_PORT','3306');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME,DB_PORT);


//if (mysqli_connect_errno())
//{
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>histry</title>
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
                    <h1 class="page-head-line">register History  </h1>
                </div>
            </div>
            <div class="row" >

                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>student Name </th>
                                        <th>Student Reg no </th>
                                        <th>email</th>
                                        <th>session</th>
                                        <th>department</th>
                                        <th>level</th>
                                        <th>semester</th>
                                        <th>course</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql=mysqli_query($con,"select *from studentRegister where email='kasunviduranga.kv@gmail.com'");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>


                                        <tr>
                                            <td><?php echo htmlentities($row['studentName']);?></td>
                                            <td><?php echo htmlentities($row['StudentRegno']);?></td>
                                            <td><?php echo htmlentities($row['email']);?></td>
                                            <td><?php echo htmlentities($row['sessionName']);?></td>
                                            <td><?php echo htmlentities($row['department']);?></td>
                                            <td><?php echo htmlentities($row['levelName']);?></td>
                                            <td><?php echo htmlentities($row['semester']);?></td>
                                            <td><?php echo htmlentities($row['courseName']);?></td>
                                        </tr>
                                        <?php
                                        $cnt++;
                                    }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>

    <script src="dist/js/jquery-3.3.1.min.js"rel="script"type="text/javascript"></script>
    <script src="dist/js/bootstrap.min.js"rel="script"type="text/javascript"></script>
    </body>
    </html>
<?php ?>