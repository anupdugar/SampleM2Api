<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SampleM2Api\Api;

interface TestServiceInterface
{
    /**
     * @param int $id
     * @return \Magento\SampleM2Api\Api\Data\TestServiceDataInterface
     */
    public function getTestServiceData($id);
}
