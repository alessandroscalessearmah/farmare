<?php
/**
 * Copyright © Ugo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armah\Quickmenu\Controller\Adminhtml\Quickmenu;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;
    protected $logger;
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(

        \Psr\Log\LoggerInterface $logger,
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->logger = $logger;
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('quickmenu_id');
        
            $model = $this->_objectManager->create(\Armah\Quickmenu\Model\Quickmenu::class)->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Quickmenu no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }
            
            $data["block_categories"] = implode(",", $data["block_categories"]);
            $data["block_top_brands"] = implode(",", $data["block_top_brands"]);
            $model->setData($data);
        
            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Quickmenu.'));
                $this->dataPersistor->clear('armah_quickmenu_quickmenu');
        
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['quickmenu_id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Quickmenu.'));
            }
        
            $this->dataPersistor->set('armah_quickmenu_quickmenu', $data);
            return $resultRedirect->setPath('*/*/edit', ['quickmenu_id' => $this->getRequest()->getParam('quickmenu_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}

