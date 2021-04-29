<?php


namespace Zanini\Contato\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Contato extends AbstractDb
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            'zanini_contato',
            'id'
        );
    }
}
