<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 08/12/2018
 * Time: 4:03 AM
 */

require_once __DIR__."/../CourseRegisterBusiness.php";
require_once __DIR__."/../../db/DBConnction.php";
require_once __DIR__ . "/../../core/CourseRegister.php";
require_once __DIR__."/../../repo/impl/CourseRegisterRepoImpl.php";

class CourseRegisterBusinessImpl implements CourseRegisterBusiness
{

    public function addcourseRegister(CourseRegister $courseRegister): bool
    {
        $connection=(new DBConnction())->getDBConnection();
        $courseRegisterRepo=new CourseRegisterRepoImpl;
        $courseRegisterRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $courseRegisterRepo->addcourseRegister($courseRegister);
        return true;
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