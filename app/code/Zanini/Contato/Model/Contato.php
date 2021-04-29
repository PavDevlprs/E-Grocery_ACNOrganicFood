<?php


namespace Zanini\Contato\Model;


use Magento\Framework\Model\AbstractModel;
use Zanini\Contato\Api\Data\ContatoInterface;

class Contato extends AbstractModel implements ContatoInterface
{
    protected $_eventPrefix = 'zanini_contato';

    protected function _construct()
    {
        $this->_init(\Zanini\Contato\Model\ResourceModel\Contato::class);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->getData(self::ID);
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->getData(self::NOME);
    }

    /**
     * @return string|null
     */
    public function getConteudo(): ?string
    {
        return $this->getData(self::CONTEUDO);
    }

    /**
     * @return string|null
     */
    public function getDataCriacao(): ?string
    {
        return $this->getData(self::DATA_CRIACAO);
    }

    /**
     * @return string|null
     */
    public function getDataAtualizacao(): ?string
    {
        return $this->getData(self::DATA_ATUALIZACAO);
    }

    /**
     * @param int $id
     * @return ContatoInterface
     */
    public function setID($id): ContatoInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @param string $nome
     * @return ContatoInterface
     */
    public function setNome($nome): ContatoInterface
    {
        return $this->setData(self::NOME, $nome);
    }

    /**
     * @param string $conteudo
     * @return ContatoInterface
     */
    public function setConteudo($conteudo): ContatoInterface
    {
        return $this->setData(self::CONTEUDO, $conteudo);
    }

    /**
     * @param string $dataCriacao
     * @return ContatoInterface
     */
    public function setDataCriacao($dataCriacao): ContatoInterface
    {
        return $this->setData(self::DATA_CRIACAO, $dataCriacao);
    }

    /**
     * @param string $dataAtualizacao
     * @return ContatoInterface
     */
    public function setDataAtualizacao($dataAtualizacao): ContatoInterface
    {
        return $this->setData(self::DATA_ATUALIZACAO, $dataAtualizacao);
    }

}
