<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SampleM2Api\Model;

use Magento\SampleM2Api\Api\Data\CustomAttributeDataObjectDataBuilder;
use Magento\SampleM2Api\Api\Data\ItemDataBuilder;

class TestService implements \Magento\SampleM2Api\Api\TestServiceInterface
{
    /**
     * @var \Magento\SampleM2Api\Api\Data\TestServiceDataInterfaceFactory
     */
    public $dataFactory;

    public function _construct(Magento\SampleM2Api\Api\Data\TestServiceDataInterfaceFactory $dataFactory)
    {
        $this->dataFactory = $dataFactory;
    }

    /**
     * @param int $id
     * @return \Magento\SampleM2Api\Api\Data\TestServiceDataInterface
     */
    public function getTestServiceData($id)
    {
        $serviceData = $this->dataFactory->create();
        $serviceData->setId($id);
        return $serviceData;
    }
}
