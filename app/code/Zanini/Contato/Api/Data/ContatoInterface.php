<?php


namespace Zanini\Contato\Api\Data;


interface ContatoInterface
{
    const ID                = 'id';
    const NOME              = 'nome';
    const EMAIL             = 'email';
    const CONTEUDO          = 'conteudo';
    const DATA_CRIACAO      = 'data_criacao';
    const DATA_ATUALIZACAO  = 'data_atualizacao';

    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return string|null
     */
    public function getNome(): ?string;

    /**
     * @return string|null
     */
    public function getConteudo(): ?string;

    /**
     * @return string|null
     */
    public function getDataCriacao(): ?string;

    /**
     * @return string|null
     */
    public function getDataAtualizacao(): ?string;

    /**
     * @param int $id
     * @return ContatoInterface
     */
    public function setId($id): ContatoInterface;

    /**
     * @param string $nome
     * @return ContatoInterface
     */
    public function setNome($nome): ContatoInterface;

    /**
     * @param string $conteudo
     * @return ContatoInterface
     */
    public function setConteudo($conteudo): ContatoInterface;

    /**
     * @param string $dataCriacao
     * @return ContatoInterface
     */
    public function setDataCriacao($dataCriacao): ContatoInterface;

    /**
     * @param string $dataAtualizacao
     * @return ContatoInterface
     */
    public function setDataAtualizacao($dataAtualizacao): ContatoInterface;

}
