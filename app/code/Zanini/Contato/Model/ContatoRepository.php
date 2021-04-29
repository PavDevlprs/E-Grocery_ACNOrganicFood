<?php


namespace Zanini\Contato\Model;


use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\AbstractAggregateException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Zanini\Contato\Api\ContatoRepositoryInterface;
use Zanini\Contato\Api\Data\ContatoInterface;
use Zanini\Contato\Api\Data\ContatoInterfaceFactory;
use Zanini\Contato\Api\Data\ContatoSearchResultsInterface;
use Zanini\Contato\Api\Data\ContatoSearchResultsInterfaceFactory;
use Zanini\Contato\Model\ResourceModel\Contato\CollectionFactory;
use Zanini\Contato\Model\ResourceModel\Contato as ResourceModel;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class ContatoRepository implements ContatoRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var ContatoInterfaceFactory
     */
    private $contatoFactory;

    /**
     * @var ResourceModel
     */
    private $resource;

    /**
     * @var CollectionProcessor
     */
    private $collectionProcessor;

    /**
     * @var ContatoSearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * ContatoRepository constructor.
     * @param CollectionFactory $collectionFactory
     * @param ContatoInterfaceFactory $contatoFactory
     * @param ResourceModel $resource
     * @param CollectionProcessor $collectionProcessor
     * @param ContatoSearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        ContatoInterfaceFactory $contatoFactory,
        ResourceModel $resource,
        CollectionProcessor $collectionProcessor,
        ContatoSearchResultsInterfaceFactory $searchResultsFactory
    )
    {

        $this->collectionFactory = $collectionFactory;
        $this->contatoFactory = $contatoFactory;
        $this->resource = $resource;
        $this->collectionProcessor = $collectionProcessor;
        $this->searchResultsFactory = $searchResultsFactory;
    }

    /**
     * @param string $idContato
     * @return ContatoInterface
     * @throws LocalizedException
     */
    public function getById($idContato)
    {
        $contato = $this->contatoFactory->create();
        $this->resource->load($contato, $idContato);
        if (!$contato->getId()) {
            throw new NoSuchEntityException(__('A contatação com o ID "%1" não existe.', $contato));
        }
        return $contato;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return ContatoSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        /** @var ResourceModel\Collection $collection */
        $collection = $this->collectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var ContatoSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @param ContatoInterface $contato
     * @return ContatoInterface
     * @throws LocalizedException
     */
    public function save(ContatoInterface $contato)
    {
        try {
            $this->resource->save($contato);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $contato;
    }

    /**
     * @param ContatoInterface $contato
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(ContatoInterface $contato)
    {
        try {
            $this->resource->delete($contato);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * @param string $idContato
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($idContato)
    {
        return $this->delete($this->getById($idContato));
    }

}
