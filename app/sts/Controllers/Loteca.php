<?php
namespace Sts\Controllers;

class Loteca extends ConfigConversion{
    private string $name;
    private array|string|null $data;
    public array|null $dataForm;
    public string $dataString;
    private array $dataArray;
    public array|string|null $dataSlug;
    
    public function index(){
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //var_dump($this->dataForm);

        if(!empty($this->dataForm['smgSend'])){
            $this->dataString = implode($this->dataForm);
            $this->convert();

            $this->dataArray = explode("/",$this->dataString);

            $this->varString = $this->slug(implode($this->dataArray));
            $varInterger = intval($this->varString);
            $_SESSION['word'] = $varInterger;
            //var_dump($varInterger);
        }

        if(!empty($this->dataForm['smgSend2'])){
            $this->dataString = implode($this->dataForm);
            $varInterger = intval($this->dataString);
            $varAdd = $_SESSION['word'] + $varInterger;

            $_SESSION['add'] = $varAdd;
            var_dump($_SESSION['add']);


            $y = $varAdd / 9;
            var_dump($y);
            $ys = (int)($varAdd / 9);
            $N = (9 * ($y - $ys)) + 1;
            //var_dump($N);
            $_SESSION['inteiro'] = $varAdd;
            $_SESSION['division'] = $y;
            $_SESSION['result'] = round($N,0);
        }

        $this->data = 0;
        $loteca = new \Core\ConfigViews("sts/Views/loteca",$this->data);
        $loteca->include();
    }
}