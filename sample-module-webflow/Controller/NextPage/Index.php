<?php
/***
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SampleWebFlow\Controller\NextPage;

/**
 * Responsible for loading the extension's hello world page
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}