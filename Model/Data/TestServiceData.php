<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Magento\SampleM2Api\Model\Data;


use Magento\SampleM2Api\Api\Data\TestServiceDataInterface;

class TestServiceData extends \Magento\Framework\Api\AbstractExtensibleObject implements TestServiceDataInterface
{

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
}