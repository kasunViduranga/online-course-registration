<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kasun
 * Date: 06/12/2018
 * Time: 12:23 PM
 */

class Student
{
    private $StudentRegno;
    private $studentName;
    private $email;
    private $nic;
    private $studentPhoto;
    private $password;
    private $gpa;
    private $registraDate;

    /**
     * student constructor.
     * @param $StudentRegno
     * @param $studentName
     * @param $email
     * @param $nic
     * @param $studentPhoto
     * @param $password
     * @param $gpa
     * @param $registraDate
     */
    public function __construct($StudentRegno, $studentName, $email, $nic, $studentPhoto, $password, $gpa, $registraDate)
    {
        $this->StudentRegno = $StudentRegno;
        $this->studentName = $studentName;
        $this->email = $email;
        $this->nic = $nic;
        $this->studentPhoto = $studentPhoto;
        $this->password = $password;
        $this->gpa = $gpa;
        $this->registraDate = $registraDate;
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
    public function setStudentRegno($StudentRegno)
    {
        $this->StudentRegno = $StudentRegno;
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
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
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
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * @param mixed $nic
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
    }

    /**
     * @return mixed
     */
    public function getStudentPhoto()
    {
        return $this->studentPhoto;
    }

    /**
     * @param mixed $studentPhoto
     */
    public function setStudentPhoto($studentPhoto)
    {
        $this->studentPhoto = $studentPhoto;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getGpa()
    {
        return $this->gpa;
    }

    /**
     * @param mixed $gpa
     */
    public function setGpa($gpa)
    {
        $this->gpa = $gpa;
    }

    /**
     * @return mixed
     */
    public function getRegistraDate()
    {
        return $this->registraDate;
    }

    /**
     * @param mixed $registraDate
     */
    public function setRegistraDate($registraDate)
    {
        $this->registraDate = $registraDate;
    }




}