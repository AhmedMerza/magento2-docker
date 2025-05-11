<?php

namespace Ahmed\Popup\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\RedirectFactory;

class Redirect extends Action
{
    protected $redirectFactory;

    public function __construct(
        Context $context,
        RedirectFactory $redirectFactory
    ) {
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->redirectFactory->create();

        return $resultRedirect->setUrl('/marco-lightweight-active-hoodie.html'); 
    }
}
