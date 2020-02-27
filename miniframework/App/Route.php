<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{

    protected function initRoutes(){
        $routes['home'] = array(
            'route'=>'/',
            'controller'=>'indexController',
            'action'=>'index'
        );
        $routes['sobrenos'] = array(
            'route'=>'/sobrenos',
            'controller'=>'indexController',
            'action'=>'sobreNos'
        );

        $this->setRoutes($routes);
    }


}

?>