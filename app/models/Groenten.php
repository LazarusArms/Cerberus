<?php

class Groenten extends \Phalcon\Mvc \Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $komkommer;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $tomaat;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $aardappel;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'groenten';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Groenten[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Groenten
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
