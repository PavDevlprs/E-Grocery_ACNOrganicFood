<?php


namespace Zanini\Contato\Api\Data;


use Magento\Framework\Api\SearchResultsInterface;

interface ContatoSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return ContatoInterface[]
     */
    public function getItems();

    /**
     * @param ContatoInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
