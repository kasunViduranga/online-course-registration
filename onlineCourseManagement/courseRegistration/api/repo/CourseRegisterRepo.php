<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 08/12/2018
 * Time: 4:08 AM
 */

require_once __DIR__."/../core/CourseRegister.php";
require_once __DIR__."/../db/DBConnction.php";

interface CourseRegisterRepo
{
    public function setConnection(mysqli $connection): void;

    public function addcourseRegister(CourseRegister $courseRegister): bool;

    public function deletecourseRegister(string $id): bool;

    public function searchcourseRegister(string $id): array;

    public function updatecourseRegister(CourseRegister $courseRegister): bool;

    public function getAllcourseRegister(): array;
}