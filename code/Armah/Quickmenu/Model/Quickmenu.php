<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Model;

use Armah\Quickmenu\Api\Data\QuickmenuInterface;
use Magento\Framework\Model\AbstractModel;

class Quickmenu extends AbstractModel implements QuickmenuInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Armah\Quickmenu\Model\ResourceModel\Quickmenu::class);
    }

    /**
     * @inheritDoc
     */
    public function getQuickmenuId()
    {
        return $this->getData(self::QUICKMENU_ID);
    }

    /**
     * @inheritDoc
     */
    public function setQuickmenuId($quickmenuId)
    {
        return $this->setData(self::QUICKMENU_ID, $quickmenuId);
    }

    /**
     * @inheritDoc
     */
    public function getBlockName()
    {
        return $this->getData(self::BLOCK_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setBlockName($blockName)
    {
        return $this->setData(self::BLOCK_NAME, $blockName);
    }

    /**
     * @inheritDoc
     */
    public function getBlockContentType()
    {
        return $this->getData(self::BLOCK_CONTENT_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setBlockContentType($blockContentType)
    {
        return $this->setData(self::BLOCK_CONTENT_TYPE, $blockContentType);
    }

    /**
     * @inheritDoc
     */
    public function getBlockMainCategory()
    {
        return $this->getData(self::BLOCK_MAIN_CATEGORY);
    }

    /**
     * @inheritDoc
     */
    public function setBlockMainCategory($blockMainCategory)
    {
        return $this->setData(self::BLOCK_MAIN_CATEGORY, $blockMainCategory);
    }

    /**
     * @inheritDoc
     */
    public function getBlockTopBrands()
    {
        return $this->getData(self::BLOCK_TOP_BRANDS);
    }

    /**
     * @inheritDoc
     */
    public function setBlockTopBrands($blockTopBrands)
    {
        return $this->setData(self::BLOCK_TOP_BRANDS, $blockTopBrands);
    }

    /**
     * @inheritDoc
     */
    public function getBlockIcon()
    {
        return $this->getData(self::BLOCK_ICON);
    }

    /**
     * @inheritDoc
     */
    public function setBlockIcon($blockIcon)
    {
        return $this->setData(self::BLOCK_ICON, $blockIcon);
    }

    /**
     * @inheritDoc
     */
    public function getBlockCategories()
    {
        return $this->getData(self::BLOCK_CATEGORIES);
    }

    /**
     * @inheritDoc
     */
    public function setBlockCategories($blockCategories)
    {
        return $this->setData(self::BLOCK_CATEGORIES, $blockCategories);
    }
}