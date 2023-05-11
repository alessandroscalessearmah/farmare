<?php

namespace Armah\Quickmenu\Model\Config\Source;

class BlockType implements \Magento\Framework\Data\OptionSourceInterface {


    /**
     * @var array|null
     */
    protected $_options;

    /**
     * @param \WDT\Faq\Model\ResourceModel\Category\CollectionFactory $collectionFactory
     */
    public function __construct(

    ) {

    }

    /**
     * @return array
     */
    public function toOptionArray() {

        // return an array with value and label keys from this list of block types: Category, Brand
        return [
            ['value' => 'category', 'label' => __('Category')],
            ['value' => 'brand', 'label' => __('Brand')],
        ];
    }
}
?>