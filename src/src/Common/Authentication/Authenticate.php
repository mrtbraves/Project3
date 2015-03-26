<?php

/**
 * Class Authenticate
 * User: Chuck
 * Created: Feb 27, 2015
 */



namespace Common\Authentication;



class Authenticate implements IAuthentication
{

    protected $username;
    protected $password;
    protected $status;
    protected $lastLogin;
    protected $model;
    protected $users;


    public function __construct($postData)
    {


        //$this->username = $postData->username;
        //$this->password = $postData->password;
        $dbtype = $postData->memtype;



        function getModelName($dbtype){

            if($dbtype == 'inmem') {

                $db = new InMemDb();

                return $db;
            }

            if($dbtype == 'infile'){

                $db = new FlatDb();

                return $db;
            }

            if($dbtype == 'mysql'){

                $db = new MySqlDb();

                return $db;
            }
            if($dbtype == 'sqlite'){

                $db = new SQLiteDb();

                return $db;
            }

            throw new \InvalidArgumentException(__METHOD__.'('.__LINE__.'): ERROR: No Database Connection');

        }


        $this->model = getModelName($dbtype);

        $this->users = $this->model->getUsers();

        //print_r($this->users);

    }




    public function authenticate($username = '', $password = '')
    {
        function checkUser($users, $username, $password){
            foreach($users as $user){
                if ($username == $user['username']  && $password == $user['password']) {
                    return true;
                }
            }
            return false;
        }


        if ($username !== '') {
            $this->username = $username;
        }

        if ($password !== '') {
            $this->password = $password;
        }


        $check = checkUser($this->users, $this->username, $this->password);

        if($check===true){

            $this->status = ACTIVE;

            $this->lastLogin = time();

            return true;

        }

        $this->username = '';

        $this->password = '';

        $this->status = NON_ACTIVE;

        $this->lastLogin = '';

        return false;


    }







}

