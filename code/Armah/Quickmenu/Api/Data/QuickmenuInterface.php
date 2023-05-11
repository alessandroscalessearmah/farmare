<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Api\Data;

interface QuickmenuInterface
{

    const QUICKMENU_ID = 'quickmenu_id';
    const BLOCK_NAME = 'block_name';
    const BLOCK_ICON = 'block_icon';
    const BLOCK_MAIN_CATEGORY = 'block_main_category';
    const BLOCK_CATEGORIES = 'block_categories';
    const BLOCK_CONTENT_TYPE = 'block_content_type';
    const BLOCK_TOP_BRANDS = 'block_top_brands';

    /**
     * Get quickmenu_id
     * @return string|null
     */
    public function getQuickmenuId();

    /**
     * Set quickmenu_id
     * @param string $quickmenuId
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setQuickmenuId($quickmenuId);

    /**
     * Get block_name
     * @return string|null
     */
    public function getBlockName();

    /**
     * Set block_name
     * @param string $blockName
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setBlockName($blockName);

    /**
     * Get block_content_type
     * @return string|null
     */
    public function getBlockContentType();

    /**
     * Set block_content_type
     * @param string $blockContentType
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setBlockContentType($blockContentType);

    /**
     * Get block_main_category
     * @return string|null
     */
    public function getBlockMainCategory();

    /**
     * Set block_main_category
     * @param string $blockMainCategory
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setBlockMainCategory($blockMainCategory);

    /**
     * Get block_top_brands
     * @return string|null
     */
    public function getBlockTopBrands();

    /**
     * Set block_top_brands
     * @param string $blockTopBrands
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setBlockTopBrands($blockTopBrands);

    /**
     * Get block_icon
     * @return string|null
     */
    public function getBlockIcon();

    /**
     * Set block_icon
     * @param string $blockIcon
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setBlockIcon($blockIcon);

    /**
     * Get block_categories
     * @return string|null
     */
    public function getBlockCategories();

    /**
     * Set block_categories
     * @param string $blockCategories
     * @return \Armah\Quickmenu\Quickmenu\Api\Data\QuickmenuInterface
     */
    public function setBlockCategories($blockCategories);
}
