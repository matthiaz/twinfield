<?php

namespace PhpTwinfield;

use PhpTwinfield\Enums\BrowseColumnOperator;

class BrowseColumn
{
    /** @var int */
    private $id;

    /** @var string */
    private $field;

    /** @var string|null */
    private $label;

    /** @var bool */
    private $visible;

    /** @var bool */
    private $ask;

    /** @var BrowseColumnOperator */
    private $operator;

    /** @var string|null */
    private $from;

    /** @var string|null */
    private $to;

    /**
     * BrowseColumn constructor.
     */
    public function __construct()
    {
        $this->visible = false;
        $this->ask = false;
        $this->operator = BrowseColumnOperator::NONE();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BrowseColumn
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return BrowseColumn
     */
    public function setField(string $field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return BrowseColumn
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return BrowseColumn
     */
    public function setVisible(bool $visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAsk()
    {
        return $this->ask;
    }

    /**
     * @param bool $ask
     * @return BrowseColumn
     */
    public function setAsk(bool $ask)
    {
        $this->ask = $ask;
        return $this;
    }

    /**
     * @return BrowseColumnOperator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param BrowseColumnOperator $operator
     * @return BrowseColumn
     */
    public function setOperator(BrowseColumnOperator $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return BrowseColumn
     */
    public function setFrom(string $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return BrowseColumn
     */
    public function setTo(string $to)
    {
        $this->to = $to;
        return $this;
    }
}
