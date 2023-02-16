<?php
namespace Sts\Controllers;

class LotecaAlter{

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

            $this->dataArray = explode("/",$this->dataString);

            $this->varString = implode($this->dataArray);
            $varInterger = floatval($this->varString);
            $_SESSION['decimal'] = $varInterger;
            var_dump($varInterger);
        }

        if(!empty($this->dataForm['smgSend2'])){
            $this->dataString = implode($this->dataForm);
            $varInterger = intval($this->dataString);
            var_dump($varInterger);
            $result = $_SESSION['decimal'] - $varInterger;

            $_SESSION['result'] = $result;
            //var_dump($_SESSION['result']);

            $y = $result / 9;
            var_dump($y);
            $ys = (int)($result / 9);
            $N = (9 * ($y - $ys)) + 1;
            var_dump($N);
            $_SESSION['inteiro'] = $result;
            $_SESSION['division'] = $y;
            $_SESSION['result'] = round($N,0);
        }
        
        $this->data = 0;
        $loteca = new \Core\ConfigViews("sts/Views/lotecaAlter",$this->data);
        $loteca->include();
    }
}