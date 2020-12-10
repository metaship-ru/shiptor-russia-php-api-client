<?php
namespace ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Fields\AddPackage;

use ShiptorRussiaApiClient\Client\Core\Fields\Custom;

class Product extends Custom{
    protected function setFields(){
        $this->getFieldsCollection()
                ->String("shopArticle")->setRequired()->add()
                ->Number("count")->setRequired()->add()
                ->Number("price")->setRequired()->add()
                ->Number("vat")->add()
                ->String("supplier_INN")->add()
                ->String("supplier_name")->add()
                ->String("supplier_phone")->add();
    }
    public function setShopArticle($article){
        $this->getFieldsCollection()->get('shopArticle')->setValue($article);
        return $this;
    }
    public function setCount($count){
        $this->getFieldsCollection()->get('count')->setValue($count);
        return $this;
    }
    public function setPrice($price){
        $this->getFieldsCollection()->get('price')->setValue($price);
        return $this;
    }
    public function setVat($vat){
        $this->getFieldsCollection()->get('vat')->setValue($vat);
        return $this;
    }

    /**
     * @param string       $inn
     * @param string|null  $name
     * @param integer|null $phone
     *
     * @return Product
     */
    public function setSupplier($inn, $name = null, $phone = null)
    {
        $this->getFieldsCollection()->get('supplier_INN')->setValue($inn);

        if ($name) {
            $this->getFieldsCollection()->get('supplier_name')->setValue($name);
        }

        if ($phone) {
            $this->getFieldsCollection()->get('supplier_phone')->setValue($phone);
        }

        return $this;
    }
    
    public function checkSingleValue($value){
        return is_array($value);
    }
    public function convertValue($value) {
        return (array)$value;
    }
}