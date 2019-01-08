<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 08/12/2018
 * Time: 4:04 AM
 */

require_once __DIR__ . "/../core/CourseRegister.php";

interface CourseRegisterBusiness
{
    public function addcourseRegister(CourseRegister $courseRegister): bool;
    public function deletecourseRegister(string $id): bool;
    public function searchcourseRegister(string $id): array;
    public function updatecourseRegister(CourseRegister $courseRegister): bool;
    public function getAllcourseRegister(): array;
}