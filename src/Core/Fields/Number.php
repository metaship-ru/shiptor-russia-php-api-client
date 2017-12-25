<?php
namespace ShiptorRussiaApiClient\Client\Core\Fields;

use ShiptorRussiaApiClient\Client\Core\Fields\Field;

class Number extends Field{
    public function __construct($name){
        parent::__construct("Number",$name);
    }
    public function convertValue($value){
        return floatval($value);
    }
    protected function checkSingleValue($value){
        return is_numeric($value);
    }
}