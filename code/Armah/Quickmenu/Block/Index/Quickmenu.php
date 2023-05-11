<?php
/**
 * Copyright © Ugo Cavallo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Block\Index;

class Quickmenu extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(


        \Magento\Eav\Model\Config $eavConfig,
        \Magento\Framework\UrlInterface $urlInterface,
        \Magento\Eav\Api\Data\AttributeOptionInterfaceFactory $optionFactory,
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\Collection $attributeOptionCollection,
        \Magento\Framework\App\ResourceConnection $resource,
        \Armah\Quickmenu\Model\Quickmenu $quickmenu,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->_categoryFactory = $categoryFactory;  
        $this->_eavConfig = $eavConfig;
        $this->_urlInterface = $urlInterface;
        $this->_optionFactory = $optionFactory;
        $this->_attributeOptionCollection = $attributeOptionCollection;
        $this->_resource = $resource;
        $this->_quickmenu = $quickmenu;

        parent::__construct($context, $data);
    }



    /**
     * get the model as collection
     */
    public function getQuickmenuCategories()
    {

        $collection = $this->_quickmenu->getCollection();
        return $collection->getData();

    }

    /**
     * foreach model get the category id and get the category name
     */
    public function getCategories()
    {




        $collection = $this->getQuickmenuCategories();

        // foreach quickmenucategories load the category and get the name and the url
        $categories = [];
        foreach($collection as $collectionitem){

            if($collectionitem["block_content_type"] == "category"){


                $selectedcategories = explode(",", $collectionitem["block_categories"]);

                $blockcategories = [];
                $i = 0;
                foreach ($selectedcategories as $categoryitem) {
                    $categoryitem = $this->_categoryFactory->create()->load($categoryitem);
                    $svg = ($i == 0) ? $collectionitem["block_icon"] : '';


                    $blockcategories[] = [
                        'name' => $categoryitem->getName(),
                        'url' => $categoryitem->getUrl(),
                        'svg' => base64_encode($svg)
                    ];
                    
                    $i++;
                }

                $categories[$collectionitem["quickmenu_id"]."-".$collectionitem["block_name"]] = $blockcategories;
            }
            // IF IS BRAND GET THE BRAND LINK
            else{


                
                $selectedcategories[] = explode(",", $collectionitem["block_categories"]);
                $svg = $collectionitem["block_icon"];
                // get the first result category name and url
                $categoryitem = $this->_categoryFactory->create()->load($selectedcategories[0]);
                $brandMainCat[] = [
                    'name' => $categoryitem->getName(),
                    'url' => $categoryitem->getUrl(),
                    'svg' => base64_encode($svg)
                ];  
                    
                


                // direct query to mysql mst_seo_filter_rewrite where option in
                $connection = $this->_resource->getConnection();
                $tableName = $this->_resource->getTableName('mst_seo_filter_rewrite');
                $sql = "SELECT * FROM " . $tableName . " WHERE option IN (" . $collectionitem["block_top_brands"] . ")";
                $result = $connection->fetchAll($sql);
                $brandLinks = [];
                foreach ($result as $resultitem) {


                    $websiteUrl = $this->_urlInterface->getBaseUrl();
                    // set brand url
                    $url = $websiteUrl . "marchi/" . $resultitem["rewrite"]; 

                    $brandLinks[] = [
                        'name' => $this->getAttributeLabel($resultitem["option"]),
                        'url' => $url
                    ];
                }
                $brandBlock = array_merge($brandMainCat, $brandLinks);
                $categories[$collectionitem["quickmenu_id"]."-".$collectionitem["block_name"]] = $brandBlock;
            }

        }
        return $categories;
    }

    /**
     * foreach model get the category id and get the category name
     */
    public function renderBlocks()
    {

        return $this->getCategories();

    }


    // get attribute label by option id
    public function getAttributeLabel($optionId, $attributeCode = "manufacturer")
    {
        $attribute = $this->_eavConfig->getAttribute('catalog_product', $attributeCode);
        $option = $attribute->getSource()->getOptionText($optionId);
        return $option;
    }




}

