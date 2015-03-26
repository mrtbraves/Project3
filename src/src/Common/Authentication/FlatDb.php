<?php

/**
 * FlatDB.php
 * Used to store users to flat file and retrive
 * Created by PhpStorm.
 * User: chuck
 * Date: 2/27/15
 * Time: 8:24 PM
 */

namespace Common\Authentication;

class FlatDb
{


    protected $flatDb;
    protected $users = array();


    public function __construct(){

        $file = realpath("../src/Common/Data/flatDb.csv");//exit;
        $this->flatDb = fopen($file, "r");
        $data=fgetcsv($this->flatDb);
        fclose($this->flatDb);

        foreach($data as $d){
            $user = explode(':', $d);

            $this->users[] = array(
                'username' => $user[0],
                'password' => $user[1]

            );

        }



    }

    public function getUsers(){

        return $this->users;

    }


}