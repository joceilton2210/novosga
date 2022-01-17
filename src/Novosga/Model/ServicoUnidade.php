<?php

namespace Novosga\Model;

/**
 * Servico Unidade.
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 *
 * @Entity
 * @Table(name="uni_serv")
 */
class ServicoUnidade extends Model implements \JsonSerializable
{
    /**
     * @Id
     * @ManyToOne(targetEntity="Servico")
     * @JoinColumn(name="servico_id", referencedColumnName="id", nullable=false)
     */
    protected $servico;

    /**
     * @Id
     * @ManyToOne(targetEntity="Unidade")
     * @JoinColumn(name="unidade_id", referencedColumnName="id", nullable=false)
     */
    protected $unidade;

    /**
     * @ManyToOne(targetEntity="Local")
     * @JoinColumn(name="local_id", referencedColumnName="id", nullable=false)
     */
    protected $local;

    /**
     * @Column(type="string", name="sigla", length=2, nullable=false)
     */
    protected $sigla;

    /**
     * @Column(type="smallint", name="status", nullable=false)
     */
    protected $status;

    /**
     * @Column(type="smallint", name="peso", nullable=false)
     */
    protected $peso;

    /**
     * @Column(type="smallint", name="maxsenhas", nullable=false)
     */
    protected $maxsenhas;

    /**
     * @Column(type="smallint", name="contador", nullable=false)
     */
    protected $contador;

    /**
     * @Column(type="datetime", name="dataContador", length=50, nullable=true)
     */
    protected $dataContador;

    /**
     * @Column(type="string", name="hora_limite", nullable=true)
     */
    protected $horalimite;

    public function __construct()
    {
    }

    /**
     * @return Servico
     */
    public function getServico()
    {
        return $this->servico;
    }

    public function setServico(Servico $servico)
    {
        $this->servico = $servico;
    }

    /**
     * @return Unidade
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    public function setUnidade(Unidade $unidade)
    {
        $this->unidade = $unidade;
    }

    /**
     * @return Local
     */
    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal(Local $local)
    {
        $this->local = $local;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
/**
     * @return mixed
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * @param mixed $contador
     */
    public function setContador($contador)
    {
        $this->contador = $contador;
    }

    /**
     * @return mixed
     */
    public function getDataContador()
    {
        return $this->dataContador;
    }

    /**
     * @param mixed $dataContador
     */
    public function setDataContador($dataContador)
    {
        $this->dataContador = $dataContador;
    }

    /**
     * @return mixed
     */
    public function getHoralimite()
    {
        return $this->horalimite;
    }

    /**
     * @param mixed $horalimite
     */
    public function setHoralimite($horalimite)
    {
        $this->horalimite = $horalimite;
    }


    /**
     * @return mixed
     */
    public function getMaxsenhas()
    {
        return $this->maxsenhas;
    }

    /**
     * @param mixed $maxsenhas
     */
    public function setMaxsenhas($maxsenhas)
    {
        $this->maxsenhas = $maxsenhas;
    }


    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    public function getSigla()
    {
        return $this->sigla;
    }

    public function toString()
    {
        return $this->sigla.' - '.$this->getServico()->getNome();
    }

    public function jsonSerialize()
    {
        return array(
            'sigla' => $this->getSigla(),
            'peso' => $this->getPeso(),
            'local' => $this->getLocal(),
            'servico' => $this->getServico(),
            'maxsenhas' => $this->getMaxsenhas(),
            'contador' => $this->getContador(),
            'dataContador' => $this->getDataContador(),
            'horalimite' => $this->getHoralimite(),
        );
    }
}
