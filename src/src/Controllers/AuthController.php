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
    public function action()
    {
        $postData = $this->request->getPost();


        $username = $postData->username;
        $error = "Wrong Username or Password".PHP_EOL;
        $active = false;
        $memtype = 'inmem';

        //echo 'Authenticate the above two different ways' . var_dump($postData);

        $auth = new Authenticate($postData);
        $result = $auth->authenticate($postData->username, $postData->password);

        if($result === true){

            $active = true;

            $view = new WelcomeView();
            $view->show(array(
                'active'    => $active
            ));

            die;
        }


        $view = new LoginForm(array(
            'active'    => $active,
            'username'  => $username,
            'error'     => $error,
            'memtype'   => $memtype
        ));
        $view->show();

    }
}
