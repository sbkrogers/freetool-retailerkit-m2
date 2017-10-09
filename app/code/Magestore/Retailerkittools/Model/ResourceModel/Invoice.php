<?php


namespace Magestore\Retailerkittools\Model\ResourceModel;

class Invoice extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magestore_retailerkittools_invoice', 'invoice_id');
    }
}
