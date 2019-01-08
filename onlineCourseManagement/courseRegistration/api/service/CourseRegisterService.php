<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 06/12/2018
 * Time: 2:03 PM
 */
require_once __DIR__."/../business/impl/CourseRegisterBusinessImpl.php";
require_once __DIR__."/../core/CourseRegister.php";
require_once __DIR__."/../service/CourseRegisterService.php";

$corseRegisterBo = new CourseRegisterBusinessImpl();
//$operation = $_GET["oparation"];

$method = $_SERVER["REQUEST_METHOD"];
switch ($method){
    case"GET":
//        echo json_encode($studentBO->getAllStudents());
        break;
    case "POST":
        $id=0;
        $studentName=$_POST["studentname"];
        $StudentRegno=$_POST["studentregno"];
        $email=$_POST["email"];
        $sessionName=$_POST["session"];
        $department=$_POST["department"];
        $levelName=$_POST["level"];
        $semester=$_POST["semester"];
        $courseName=$_POST["course"];

//echo var_dump($id,$studentName,$StudentRegno,$email,$sessionName,$department,$levelName,$semester,$courseName);

        $tempCourse=new CourseRegister($id,$studentName,$StudentRegno,$email,$sessionName,$department,$levelName,$semester,$courseName);
        $resp=$corseRegisterBo->addcourseRegister($tempCourse);

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