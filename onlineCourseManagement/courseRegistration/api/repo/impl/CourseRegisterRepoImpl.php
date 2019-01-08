<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 08/12/2018
 * Time: 4:08 AM
 */

require_once __DIR__."/../CourseRegisterRepo.php";
require_once __DIR__ . "/../../core/CourseRegister.php";

class CourseRegisterRepoImpl implements CourseRegisterRepo
{

    private $connection;

    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addcourseRegister(CourseRegister $courseRegister): bool
    {
        $resp=$this->connection->
        query("
        INSERT INTO studentRegister VALUES(
        '{$courseRegister->getId()}',
        '{$courseRegister->getStudentName()}',
        '{$courseRegister->getStudentRegno()}',
        '{$courseRegister->getEmail()}',
        '{$courseRegister->getSessionName()}',
        '{$courseRegister->getDepartment()}',
        '{$courseRegister->getLevelName()}',
        '{$courseRegister->getSemester()}',
        '{$courseRegister->getCourseName()}')");
        return $resp;
    }


    public function deletecourseRegister(string $id): bool
    {
        // TODO: Implement deletecourseRegister() method.
    }

    public function searchcourseRegister(string $id): array
    {
        // TODO: Implement searchcourseRegister() method.
    }

    public function updatecourseRegister(CourseRegister $courseRegister): bool
    {
        // TODO: Implement updatecourseRegister() method.
    }

    public function getAllcourseRegister(): array
    {
        // TODO: Implement getAllcourseRegister() method.
    }
}