<?php

namespace Views;


class LoginForm extends View
{
    public function __construct($data = array())
    {

      //print_r($data);
      $username = $data['username'];
      $error = $data['error'];
      $memtype = $data['memtype'];
        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>CS4350 Project One Login</title>


        <style>
          html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
          }


          body{
            color: #4E4790;
            font-size: medium;
            margin: 0;
            background: #E9E6FC;
          }
          h4{
            color: #4E4790;
          }
          a {
            color: whitesmoke;
            text-decoration: none;
          }

          a:hover
          {
            color: whitesmoke;
            text-decoration:none;
            cursor:pointer;
          }

          .nav{
            color: whitesmoke;
            background: #4E4790;
            height: 30px;
            padding-top: 10px;
            padding-left: 10px;
          }

          .container{
            margin-top:10px;
            border-radius: 5px;
            width: 250px;
            margin: 0 auto;
            text-align: center;
            background: #D9D0F6;
            padding: 3px 10px 10px 10px;
          }

          .formcontrol{
            padding: 5px;
            text-align: left;
            font-size: small;
            color: #4E4790;
          }


          input[type="text"] {
            display: block;
            margin: 0;
            height:30px;
            width: 100%;
            color: inherit;
            font-family: sans-serif;
            font-size: 15px;
            appearance: none;
            box-shadow: none;
            border-radius: none;
          }
          input[type="text"]:focus {
            outline: none;
          }
          input[type="password"] {
            display: block;
            margin: 0;
            height:30px;
            width: 100%;
            color: inherit;
            font-family: sans-serif;
            font-size: 15px;
            appearance: none;
            box-shadow: none;
            border-radius: none;
          }
          input[type="password"]:focus {
            outline: none;
          }
          .button {

            background-color: #4E4790;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            color: whitesmoke;
            width:90px;
            height:30px;
            text-decoration: none;
            cursor: pointer;
            border:none;

          }
          .footer{
            margin-top:148px;
            height: 800px;
            background: #C3BBEE;


          }

          .form{
            position: relative;
            padding: 20px;
            margin-top: -940px

          }
          .radio{
            margin-left: -2px;

          }



        </style>
    </head>
    <body>
        <div align="center">
            <form method="POST" action="/auth">
              <div class="container">

                <h4>Please Login</h4>
                <div id="error" style="margin-bottom:5px; color: firebrick">$error</div>
                <div class="formcontrol">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" value="$username" autocomplete="off">
                </div>
                <div class="formcontrol">
                  <label for="username">Password </label>
                  <input type="password" id="password" name="password">
                </div>
                <div class="formcontrol">
                  <label style="cursor: pointer">InMem <input type="radio" class="radio" name="memtype" value="inmem" checked> </label>
                  <label style="cursor: pointer">InFile <input type="radio" class="radio" name="memtype" value="infile"> </label>
                  <label style="cursor: pointer">MySQL <input type="radio" class="radio" name="memtype" value="mysql"> </label>
                  <label style="cursor: pointer">SQLite <input type="radio" class="radio" name="memtype" value="sqlite"> </label>
                </div>
                <div style="text-align: right; margin-top:10px;">
                  <input class="button" type="submit" value="Login">
                </div>
              </div>
            </form>
        </div>
    </body>
</html>

LOGIN_FORM;
    }
}
