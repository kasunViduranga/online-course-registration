<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 06/12/2018
 * Time: 12:41 PM
 */

require_once __DIR__."/../StudentRepo.php";
require_once __DIR__ . "/../../core/Student.php";


class StudentRepoImpl implements StudentRepo
{
    private $connection;

    /**
     * StudentRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addStudent(Student $student): bool
    {
        $resp=$this->connection->
        query("
        INSERT INTO students VALUES(
        '{$student->getStudentRegno()}',
        '{$student->getStudentName()}',
        '{$student->getEmail()}',
        '{$student->getNic()}',
        '{$student->getStudentPhoto()}',
        '{$student->getPassword()}',
        '{$student->getGpa()}',
        '{$student->getRegistraDate()}')");
        return $resp;
    }

    public function deleteStudent(string $id): bool
    {
        // TODO: Implement deleteStudent() method.
    }

    public function searchStudent(string $id): array
    {
        // TODO: Implement searchStudent() method.
    }

    public function updateStudent(Student $student): bool
    {
        // TODO: Implement updateStudent() method.
    }

    public function getAllStudents(): array
    {
        // TODO: Implement getAllStudents() method.
    }
}