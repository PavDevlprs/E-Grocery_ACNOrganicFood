<?php


namespace Zanini\Contato\Api;


use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Zanini\Contato\Api\Data\ContatoInterface;
use Zanini\Contato\Api\Data\ContatoSearchResultsInterface;

interface ContatoRepositoryInterface
{
    /**
     * @param string $idContato
     * @return ContatoInterface
     * @throws LocalizedException
     */
    public function getById($idContato);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return ContatoSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param ContatoInterface $contato
     * @return ContatoInterface
     * @throws LocalizedException
     */
    public function save(ContatoInterface $contato);

    /**
     * @param ContatoInterface $contato
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(ContatoInterface $contato);

    /**
     * @param string $idContato
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($idContato);
}
