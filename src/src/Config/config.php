<?php

$projectDir = realpath(dirname(__FILE__) . '/../../');
$authDir = $projectDir . '/src/Common/Authentication';
$commonDir = $projectDir . '/src/Common';
$controllersDir = $projectDir . '/src/Controllers';
$configDir = $projectDir . '/src/Config';
$connectionDir = $projectDir . '/src/Common/Connections';
$httpDir = $projectDir . '/src/Common/Http';
$routerDir = $projectDir . '/src/Common/Routers';
$srcDir = $projectDir . '/src';
$viewsDir = $projectDir . '/src/Views';

$config = [
    'app' => [
        'classes'      => [
            'Common\\Authentication\\IAuthentication'   => $authDir . '/IAuthentication.php',
            'Common\\Authentication\\Authenticate'      => $authDir . '/Authenticate.php',
            'Common\\Authentication\\FlatDb'            => $authDir . '/FlatDb.php',
            'Common\\Authentication\\InMemDb'           => $authDir . '/InMemDb.php',
            'Common\\Authentication\\MySqlDb'           => $authDir . '/MySqlDb.php',
            'Common\\Authentication\\SQLiteDb'          => $authDir . '/SQLiteDb.php',
            'Common\\Connections\\MySQL'            => $connectionDir . '/MySQL.php',
            'Common\\Connections\\SQLite'           => $connectionDir . '/SQLite.php',
            'Common\\Http\\IRequest'                => $httpDir . '/IRequest.php',
            'Common\\Http\\SimpleRequest'           => $httpDir . '/SimpleRequest.php',
            'Common\\Routers\\IRouter'              => $routerDir . '/IRouter.php',
            'Common\\Routers\\SimpleRouter'         => $routerDir . '/SimpleRouter.php',
            'Controllers\\AuthController'           => $controllersDir . '/AuthController.php',
            'Controllers\\Controller'               => $controllersDir . '/Controller.php',
            'Controllers\\MainController'           => $controllersDir . '/MainController.php',
            'Views\\LoginForm'                      => $viewsDir . '/LoginForm.php',
            'Views\\Navigation'                      => $viewsDir . '/Navigation.php',
            'Views\\View'                           => $viewsDir . '/View.php',
            'Views\\WelcomeView'                    => $viewsDir . '/WelcomeView.php',
        ],
        'dir'          => [
            'authentication' => $authDir,
            'common'         => $commonDir,
            'controllers'    => $controllersDir,
            'config'         => $configDir,
            'connections'    => $connectionDir,
            'http'           => $httpDir,
            'routers'        => $routerDir,
            'src'            => $srcDir,
            'views'          => $viewsDir
        ],
        'uri-mappings' => [
            '/auth' => 'Controllers\\AuthController',
            '/'     => 'Controllers\\MainController'
        ]
    ]
];
