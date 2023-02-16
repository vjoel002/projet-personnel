<?php
namespace Core;

abstract class Config{
    public function config(){
        define('URL','http://localhost/loteca/');
        define('CONTROLLER','Loteca');
    }
}