<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my profile</title>
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
                <h1 class="page-head-line">Change Password </h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form name="chngpwd" method="post">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Current Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" name="newpass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword3" name="cnfpass" placeholder="Password" />
                            </div>

                            <button type="submit" name="submit" class="btn btn-default" style="background-color: #005cbf;color: white;left: 80%;position: relative">Submit</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="dist/js/jquery-3.3.1.min.js"rel="script"type="text/javascript"></script>
<script src="dist/js/bootstrap.min.js"rel="script"type="text/javascript"></script>
</body>
</html>