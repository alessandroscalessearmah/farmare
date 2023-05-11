<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Api\Data;

interface QuickmenuSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Quickmenu list.
     * @return \Armah\Quickmenu\Api\Data\QuickmenuInterface[]
     */
    public function getItems();

    /**
     * Set block_name list.
     * @param \Armah\Quickmenu\Api\Data\QuickmenuInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

