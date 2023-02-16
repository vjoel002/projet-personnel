<?php
namespace Sts\Controllers;

abstract class ConfigConversion{
    public array $format;
    public string $dataString;
    private string|array|null $data;

    protected function convert(){ 
        $this->format['a'] = 'AÁÀÃÄãàáäaBbCÇçcDdEÉÈËéèë&eFfGgHhIÍÏïíiJjKkLlMmNÑñnOÕÓÖÒõöòóoPpQqRrSsTtUÜÙÚüùúuVvWwXxYyZz';
        $this->format['b'] = '11111111112233334455555555566778899999911223344555566666666667788991122333333334455667788';
        $this->dataString = strtr(utf8_decode($this->dataString),utf8_decode($this->format['a']),utf8_decode($this->format['b']));
        
    }

    protected function slug($slug){
        $this->dataSlug = strtolower($slug);
        $this->dataSlug = str_replace("-","",$this->dataSlug);
        $this->dataSlug = str_replace(" ","",$this->dataSlug);
        $this->dataSlug = str_replace("/","",$this->dataSlug);
        $this->dataSlug = str_replace(".","",$this->dataSlug);
        $this->dataSlug = str_replace(":","",$this->dataSlug);


        $this->dataSlug = str_replace("*","",$this->dataSlug);
        $this->dataSlug = str_replace("+","",$this->dataSlug);
        $this->dataSlug = str_replace(";","",$this->dataSlug);
        $this->dataSlug = str_replace(",","",$this->dataSlug);
        $this->dataSlug = str_replace("?","",$this->dataSlug);

        $this->dataSlug = str_replace(",","",$this->dataSlug);
        $this->dataSlug = str_replace("!","",$this->dataSlug);
        $this->dataSlug = str_replace("@","",$this->dataSlug);
        $this->dataSlug = str_replace("#","",$this->dataSlug);
        $this->dataSlug = str_replace("%","",$this->dataSlug);

        $this->dataSlug = str_replace("(","",$this->dataSlug);
        $this->dataSlug = str_replace(")","",$this->dataSlug);
        $this->dataSlug = str_replace("=","",$this->dataSlug);
        $this->dataSlug = str_replace("<","",$this->dataSlug);
        $this->dataSlug = str_replace(">","",$this->dataSlug);

        $this->dataSlug = str_replace("{","",$this->dataSlug);
        $this->dataSlug = str_replace("}","",$this->dataSlug);
        $this->dataSlug = str_replace("[","",$this->dataSlug);
        $this->dataSlug = str_replace("]","",$this->dataSlug);
        $this->dataSlug = str_replace("_","",$this->dataSlug);

        $this->dataSlug = str_replace("'","",$this->dataSlug);
        $this->dataSlug = str_replace("|","",$this->dataSlug);
        return $this->dataSlug;
    }
}