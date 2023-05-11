<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Model;

use Armah\Quickmenu\Api\Data\QuickmenuInterface;
use Armah\Quickmenu\Api\Data\QuickmenuInterfaceFactory;
use Armah\Quickmenu\Api\Data\QuickmenuSearchResultsInterfaceFactory;
use Armah\Quickmenu\Api\QuickmenuRepositoryInterface;
use Armah\Quickmenu\Model\ResourceModel\Quickmenu as ResourceQuickmenu;
use Armah\Quickmenu\Model\ResourceModel\Quickmenu\CollectionFactory as QuickmenuCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class QuickmenuRepository implements QuickmenuRepositoryInterface
{

    /**
     * @var ResourceQuickmenu
     */
    protected $resource;

    /**
     * @var QuickmenuCollectionFactory
     */
    protected $quickmenuCollectionFactory;

    /**
     * @var QuickmenuInterfaceFactory
     */
    protected $quickmenuFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var Quickmenu
     */
    protected $searchResultsFactory;


    /**
     * @param ResourceQuickmenu $resource
     * @param QuickmenuInterfaceFactory $quickmenuFactory
     * @param QuickmenuCollectionFactory $quickmenuCollectionFactory
     * @param QuickmenuSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceQuickmenu $resource,
        QuickmenuInterfaceFactory $quickmenuFactory,
        QuickmenuCollectionFactory $quickmenuCollectionFactory,
        QuickmenuSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->quickmenuFactory = $quickmenuFactory;
        $this->quickmenuCollectionFactory = $quickmenuCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(QuickmenuInterface $quickmenu)
    {
        try {
            $this->resource->save($quickmenu);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the quickmenu: %1',
                $exception->getMessage()
            ));
        }
        return $quickmenu;
    }

    /**
     * @inheritDoc
     */
    public function get($quickmenuId)
    {
        $quickmenu = $this->quickmenuFactory->create();
        $this->resource->load($quickmenu, $quickmenuId);
        if (!$quickmenu->getId()) {
            throw new NoSuchEntityException(__('Quickmenu with id "%1" does not exist.', $quickmenuId));
        }
        return $quickmenu;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->quickmenuCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(QuickmenuInterface $quickmenu)
    {
        try {
            $quickmenuModel = $this->quickmenuFactory->create();
            $this->resource->load($quickmenuModel, $quickmenu->getQuickmenuId());
            $this->resource->delete($quickmenuModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Quickmenu: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($quickmenuId)
    {
        return $this->delete($this->get($quickmenuId));
    }
}

