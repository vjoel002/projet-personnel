<?php
namespace Sts\Controllers;

class LotecaSimples{

    private string $name;
    private array|string|null $data;
    public array|null $dataForm;
    public string $dataString;
    private array $dataArray;
    public array|string|null $dataSlug;
 
    public function index(){
    $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($this->dataForm);
        if(!empty($this->dataForm['smgSend2'])){
            $this->dataString = implode($this->dataForm);
            $varfloat = floatval($this->dataString);
            var_dump($varfloat);
            $N = (9 * $varfloat) + 1;
            var_dump($N);
            $_SESSION['result'] = round($N,0);
        }
        
        $this->data = 0;
        $loteca = new \Core\ConfigViews("sts/Views/lotecaSimples",$this->data);
        $loteca->include();
    }
}