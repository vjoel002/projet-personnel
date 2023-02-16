<?php
namespace Core;

class ConfigController extends Config{
    private string $url;
    private array $urlArray;
    private string|array $urlController;

    public function __construct(){
        $this->config();

        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            $this->urlArray = explode("/", $this->url);
            if(isset($this->urlArray[0])){
                $this->urlController = $this->urlArray[0];
            }else{
                $this->urlController = CONTROLLER;
            }
        }else{
            $this->urlController = CONTROLLER;
        }
        //echo $this->urlController;
    }
    public function loadPage(){
        $loadController = "\\Sts\Controllers\\".$this->urlController;
        $controller = new $loadController();
        $controller->index(); 
    }
}