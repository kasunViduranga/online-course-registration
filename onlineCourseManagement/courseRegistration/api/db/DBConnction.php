<?php
/**
 * Created by IntelliJ IDEA.
 * User: sanu-vithanage
 * Date: 11/30/18
 * Time: 4:52 PM
 */

class DBConnction
{

    private $host="127.0.0.1";
    private $userName="root";
    private $password="1997";
    private $database="onlinecourseManagement";
    private $port="3306";


    private $connection;

    /**
     * DBConnction constructor.
     */
    public function __construct()
    {
     $this->connection=new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }
}