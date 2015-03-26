<?php

/**
 * MySql.php
 * Used to receive users from MySqlDatabase
 * Created by PhpStorm.
 * User: chuck
 * Date: 2/27/15
 * Time: 8:24 PM
 */

namespace Common\Authentication;
use Common\Connections\MySQL;

class MySqlDb
{

    protected $mysqlDb;
    protected $users = array();


    public function __construct(){

        $this->mysqlDb = MySQL::getInstance();

        $data = $this->mysqlDb->query('select * from users');
        $users = $data->results();

        foreach($users as $user){

            $this->users[] = array(
                'username' => $user->username,
                'password' => $user->password

            );
        }

        //print_r($this->users);


    }

    public function getUsers(){

        return $this->users;

    }





}
