<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SampleM2Api\Api\Data;

interface TestServiceDataInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const ID = 'id';

    /**
     * Get Id
     *
     * @return string
     */
    public function getId();

    /**
     * Set Id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id);
}
