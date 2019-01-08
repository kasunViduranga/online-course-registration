<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 06/12/2018
 * Time: 12:28 PM
 */

require_once __DIR__ . "/../core/Student.php";

interface StudentBusiness
{

    public function addStudent(Student $student): bool;
    public function deleteStudent(string $id): bool;
    public function searchStudent(string $id): array;
    public function updateStudent(Student $student): bool;
    public function getAllStudents(): array;

}