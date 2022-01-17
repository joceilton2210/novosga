<?php

namespace Novosga\Model;

/**
 * @Entity
 * @Table(name="prioridades")
 */
class Prioridade extends SequencialModel
{
    /**
     * @Column(type="string", name="nome", length=64, nullable=false)
     */
    protected $nome;

    /**
     * @Column(type="string", name="descricao", length=100, nullable=false)
     */
    protected $descricao;

    /**
     * @Column(type="smallint", name="peso", nullable=false)
     */
    protected $peso;

    /**
     * @Column(type="smallint", name="status", nullable=false)
     */
    protected $status;

    /**
     * @Column(type="string", name="cor", length=100, nullable=false)
     */
    protected $cor;


    public function __construct()
    {
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setDescricao($desc)
    {
        $this->descricao = $desc;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }
    
    public function setPeso($peso)
    {
        if (is_int($peso) && $peso >= 0) {
            $this->peso = $peso;
        } else {
            throw new Exception(_('O peso da prioridade deve ser um inteiro positivo'));
        }
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function toString()
    {
        return $this->getNome();
    }

    public function jsonSerialize()
    {
        return array(
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'descricao' => $this->getDescricao(),
            'peso' => $this->getPeso(),
            'cor' => $this->getCor(),
        );
    }
}
