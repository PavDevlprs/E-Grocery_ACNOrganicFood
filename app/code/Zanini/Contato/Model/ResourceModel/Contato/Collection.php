<?php


namespace Zanini\Contato\Model\ResourceModel\Contato;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Zanini\Contato\Model\ResourceModel\Contato;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            Contato::class,
            Contato::class
        );
    }
}
