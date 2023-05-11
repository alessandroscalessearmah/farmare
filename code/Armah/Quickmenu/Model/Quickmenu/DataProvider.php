<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Model\Quickmenu;

use Armah\Quickmenu\Model\ResourceModel\Quickmenu\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var array
     */
    protected $loadedData;
    /**
     * @inheritDoc
     */
    protected $collection;


    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param DataPersistorInterface $dataPersistor
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        // add log
        \Psr\Log\LoggerInterface $logger,
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->logger = $logger;
        $this->collection = $collectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $model) {
            $this->loadedData[$model->getId()] = $model->getData();
        }
        $data = $this->dataPersistor->get('armah_quickmenu_quickmenu');
        
        if (!empty($data)) {
            $model = $this->collection->getNewEmptyItem();
            $model->setData($data);
            $this->loadedData[$model->getId()] = $model->getData();

            $this->dataPersistor->clear('armah_quickmenu_quickmenu');
        }
        
        if(isset($model)){
            // if not null then explode
            if($this->loadedData[$model->getId()]["block_categories"] != null){
                $this->loadedData[$model->getId()]["block_categories"] = explode(",", $this->loadedData[$model->getId()]["block_categories"]);
            }
            if($this->loadedData[$model->getId()]["block_top_brands"] != null){
                $this->loadedData[$model->getId()]["block_top_brands"] = explode(",", $this->loadedData[$model->getId()]["block_top_brands"]);
            }
        }

        return $this->loadedData;
    }
}

