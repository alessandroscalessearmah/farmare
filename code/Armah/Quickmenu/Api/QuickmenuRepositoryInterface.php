<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface QuickmenuRepositoryInterface
{

    /**
     * Save Quickmenu
     * @param \Armah\Quickmenu\Api\Data\QuickmenuInterface $quickmenu
     * @return \Armah\Quickmenu\Api\Data\QuickmenuInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Armah\Quickmenu\Api\Data\QuickmenuInterface $quickmenu
    );

    /**
     * Retrieve Quickmenu
     * @param string $quickmenuId
     * @return \Armah\Quickmenu\Api\Data\QuickmenuInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($quickmenuId);

    /**
     * Retrieve Quickmenu matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Armah\Quickmenu\Api\Data\QuickmenuSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Quickmenu
     * @param \Armah\Quickmenu\Api\Data\QuickmenuInterface $quickmenu
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Armah\Quickmenu\Api\Data\QuickmenuInterface $quickmenu
    );

    /**
     * Delete Quickmenu by ID
     * @param string $quickmenuId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($quickmenuId);
}

