<?php
namespace Core;

class ConfigViews{

    public function __construct(private string $name, private string|array|null $data){}

    public function include(){
        if(file_exists('app/'.$this->name.'.php')){
            include 'app/'.$this->name.'.php';
        }
    }
}