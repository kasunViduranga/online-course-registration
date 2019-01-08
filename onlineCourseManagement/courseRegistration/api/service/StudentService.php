<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 06/12/2018
 * Time: 2:03 PM
 */
require_once __DIR__."/../business/impl/StudentBusinessImpl.php";
require_once __DIR__."/../core/Student.php";
require_once __DIR__."/../service/StudentService.php";

$studentBO = new StudentBusinessImpl();
//$operation = $_GET["oparation"];

$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case"GET":
//        echo json_encode($studentBO->getAllStudents());
        break;
    case "POST":
        $studentRegno =0;
        $studentName=$_POST["studentName"];
        $email=$_POST["email"];
        $nic=$_POST["nic"];
        $studentPhoto="noimage.png";
        $password=$_POST["password"];
        $gpa=0.00;
        $registraDate="2018.01.01";



        $tempStudent=new Student($studentRegno,$studentName,$email,$nic,$studentPhoto,$password,$gpa,$registraDate);
        $resp = $studentBO->addStudent($tempStudent);

        if($resp){
            echo "added suceses";
        }else{
            echo "not added";
        }

//        switch (($operation)){
//
//            case "add":
//
//                echo $resp;
//                break;
//
//            case "update":
//                $tempStudent=new Student($studentRegno,$studentName,$email,$nic,$studentPhoto,$password,$gpa,$registraDate);
//                $resp = $studentBO->updateStudent($tempStudent);
//                echo $resp;
//        }
        break;
}