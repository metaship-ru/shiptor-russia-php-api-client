<?php
namespace ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request;

use ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request\GenericRequest as GenericShippingRequest,
    ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Model\Services as GetServicesResult;

class GetServices extends GenericShippingRequest{
    protected $name = "getServices";
    protected function initFields(){
        $this->getFieldsCollection()
                ->Number("page")->setRequired()->add()
                ->Number("per_page")->setRequired()->add();
    }
    public function setPage($page){
        return $this->setField("page",$page);
    }
    public function setPageSize($pageSize){
        return $this->setField("per_page",$pageSize);
    }
    public function getResponseClassName() {
        return GetServicesResult::class;
    }
}