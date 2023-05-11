<?php

namespace Armah\Quickmenu\Model\Config\Source;

class Brands implements \Magento\Framework\Data\OptionSourceInterface {

    /**
     * @var array|null
     */
    protected $_options;

    /**
     * @param \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $attributeCollectionFactory
     */
    public function __construct(
        // get the brand collection
        // Logger
        \Psr\Log\LoggerInterface $logger,
        \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $attributeCollectionFactory
    ) {

        // logger
        $this->logger = $logger;
        // get the brand collection
        $this->attributeCollectionFactory = $attributeCollectionFactory;
    }

    /**
     * @return array
     */
    public function toOptionArray() {

        // get the brand collection
        $collection = $this->attributeCollectionFactory->create();
        $collection->addFieldToFilter('frontend_input', 'select');
        $collection->addFieldToFilter('attribute_code', 'manufacturer');
        $collection->getSelect()->order('main_table.attribute_id ASC');
        

        // get attribute options as array with value and label keys
        $options = $collection->getFirstItem()->getSource()->getAllOptions(false);
        return $options;
    }
}
?>