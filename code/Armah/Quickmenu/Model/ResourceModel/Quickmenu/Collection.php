<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Model\ResourceModel\Quickmenu;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'quickmenu_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Armah\Quickmenu\Model\Quickmenu::class,
            \Armah\Quickmenu\Model\ResourceModel\Quickmenu::class
        );
    }
}

