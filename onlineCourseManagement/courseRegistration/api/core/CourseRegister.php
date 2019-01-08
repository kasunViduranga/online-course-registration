<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 08/12/2018
 * Time: 3:56 AM
 */

class CourseRegister
{
    private $id;
    private $studentName;
    private $StudentRegno;
    private $email;
    private $sessionName;
    private $department;
    private $levelName;
    private $semester;
    private $courseName;

    /**
     * courseRegister constructor.
     * @param $id
     * @param $studentName
     * @param $StudentRegno
     * @param $email
     * @param $sessionName
     * @param $department
     * @param $levelName
     * @param $semester
     * @param $courseName
     */
    public function __construct($id, $studentName, $StudentRegno, $email, $sessionName, $department, $levelName, $semester, $courseName)
    {
        $this->id = $id;
        $this->studentName = $studentName;
        $this->StudentRegno = $StudentRegno;
        $this->email = $email;
        $this->sessionName = $sessionName;
        $this->department = $department;
        $this->levelName = $levelName;
        $this->semester = $semester;
        $this->courseName = $courseName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * @param mixed $studentName
     */
    public function setStudentName($studentName): void
    {
        $this->studentName = $studentName;
    }

    /**
     * @return mixed
     */
    public function getStudentRegno()
    {
        return $this->StudentRegno;
    }

    /**
     * @param mixed $StudentRegno
     */
    public function setStudentRegno($StudentRegno): void
    {
        $this->StudentRegno = $StudentRegno;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSessionName()
    {
        return $this->sessionName;
    }

    /**
     * @param mixed $sessionName
     */
    public function setSessionName($sessionName): void
    {
        $this->sessionName = $sessionName;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department): void
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * @param mixed $levelName
     */
    public function setLevelName($levelName): void
    {
        $this->levelName = $levelName;
    }

    /**
     * @return mixed
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * @param mixed $semester
     */
    public function setSemester($semester): void
    {
        $this->semester = $semester;
    }

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param mixed $courseName
     */
    public function setCourseName($courseName): void
    {
        $this->courseName = $courseName;
    }



}


