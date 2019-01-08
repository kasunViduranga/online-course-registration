<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 06/12/2018
 * Time: 12:32 PM
 */

require_once __DIR__."/../StudentBusiness.php";
require_once __DIR__."/../../db/DBConnction.php";
require_once __DIR__ . "/../../core/Student.php";
require_once __DIR__."/../../repo/impl/StudentRepoImpl.php";

class StudentBusinessImpl implements StudentBusiness
{

    public function addStudent(Student $student): bool
    {
        $connection=(new DBConnction())->getDBConnection();
        $studentRepo=new StudentRepoImpl();
        $studentRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $studentRepo->addStudent($student);
        return true;
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