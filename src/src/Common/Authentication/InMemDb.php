<?php

/**
 * InMemDb.php
 * Used to store users to flat file and retrive
 * Created by PhpStorm.
 * User: chuck
 * Date: 2/27/15
 * Time: 8:24 PM
 */


namespace Common\Authentication;


class InMemDb
{


    protected $users;


    public function __construct(){

        $this->users = array(
            array(
                'username' => 'chuck',
                'password' => '12345678'
            ),
            array(
                'username' => 'ted',
                'password' => '12345678'
            ),
            array(
                'username' => 'larry',
                'password' => '12345678'
            ),
            array(
                'username' => 'dave',
                'password' => '12345678' 
            ),


        );


    }

    public function getUsers(){

        return $this->users;

    }









}
