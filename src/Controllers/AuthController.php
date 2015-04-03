<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;
use Common\Authentication\Authenticate;
use Views\LoginForm;
use Views\WelcomeView;

/**
 * Class AuthController
 */
class AuthController extends Controller
{
    /**
     * Function execute
     *
     * @access public
     */
    public function action() {
        $view = new LoginForm();
        $view->show();
    }

    public function login() {
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
        $error = "Wrong Username or Password".PHP_EOL;

       //echo 'Authenticate the above two different ways' . var_dump($postData);

        $auth = new Authenticate();
        $result = $auth->authenticate($username, $password);

       if ($result === true) {
            // header( 'Location: /welcome' ) ;
           $view = new WelcomeView();
           $view->show();
           die;
       }
       echo $error;
    }
}
