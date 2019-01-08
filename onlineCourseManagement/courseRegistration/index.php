<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>online corse</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-reboot.css"/>
    <link rel="stylesheet" type="text/css" href="dist/css/normalize.css">
    <link href="dist/style.css" rel="stylesheet" />
<style>
    body{
        /*height: 2000px;*/
        background-color:#062c33;
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

</style>
</head>
<body>

<?php require_once "mainHeder.php"; ?>

    <section>
        <div style="position: absolute">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="dist/img/Dollarphotoclub_90474714.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/img/online_courses.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="dist/img/courseintroimage.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </section>

<form  method="post" id="loginform">
<div id="login" style="position: absolute; top: 800px;background-color: white;left: 10%;width: 500px;height: 500px;margin: auto;border-radius: 40px">
        <h2 style="color: blue;margin: auto;top: 5%;left: 40%;position: absolute;font-family: 'Arial Black';font-size: 40px">LOG IN</h2>
        <div class="form-group" style="width: 400px; margin: auto;left: 0;right: 0;top: 20%;position: relative">
            <label for="exampleDropdownFormEmail2">Email address</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="userName" placeholder="email@example.com">
        </div>
        <div class="form-group" style="width: 400px; margin: auto;left: 0;right: 0;top: 30%;position: relative">
            <label for="exampleDropdownFormPassword2">Password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="passWord" placeholder="Password">
        </div>
        <div class="form-check" style="width: 150px;left: 10%;position:relative;right: 90%;top: 32%;position: relative">
            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
            <label class="form-check-label" for="dropdownCheck2">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary" style="position: absolute;right: 10%;top: 80%" id="btnlogin">Sign in</button>
</div>
</form>

<form id="studentForm">
<div id="signup" style="position: absolute; top: 800px;right: 10%;width: 500px;height: 500px;margin: auto;border-radius: 40px;background-color: white">

        <h2 style="color: blue;margin: auto;top: 3%;left: 30%;position: absolute;font-family: 'Arial Black';font-size: 40px">SIGN UP</h2>

        <div class="form-group" style="width: 400px; margin: auto;left: 0;right: 0;top: 13%;position: relative">
            <label for="Email">Email address</label>
            <input type="email" name="email" class="form-control" id="Email" placeholder="email@example.com">
        </div>
        <div class="form-group" style="width: 400px; margin: auto;left: 0;right: 0;top: 18%;position: relative">
            <label for="name">Full Name</label>
            <input type="text" name="studentName" class="form-control" id="studentName" placeholder="Full name">
        </div>
        <div class="form-group" style="width: 400px; margin: auto;left: 0;right: 0;top: 23%;position: relative">
            <label for="nic">NIC Number</label>
            <input type="text" name="nic" class="form-control" id="nic" placeholder="NIC Number">
        </div>
        <div class="form-group" style="width: 400px; margin: auto;left: 0;right: 0;top: 28%;position: relative">
            <label for="Password">Password</label>
            <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-danger" style="position: absolute;right: 10%;top: 90%" id="saveStudent">SignUp</button>
0
</div>
</form>

<?php require_once "footer.php"; ?>

<script src="dist/js/jquery-3.3.1.min.js" rel="script" type="text/javascript"></script>
<script src="dist/js/bootstrap.min.js" rel="script" type="text/javascript"></script>

<script>

    $('#saveStudent').click(function () {
        let stuForm = $('#studentForm').serialize();
        $.ajax({
            url: "api/service/StudentService.php",
            method: "POST",
            async: true,
            data: stuForm
        }).done(function (res) {
            alert(res);
        });
    });

    $('#btnlogin').click(function () {
        let stuForm = $('#loginform').serialize();
        $.ajax({
            url: "api/service/registra-history.php",
            method: "POST",
            async: true,
            data: stuForm
        }).done(function (res) {

        });
    });


</script>

</body>
</html>

