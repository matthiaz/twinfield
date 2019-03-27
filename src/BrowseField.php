<?php

namespace PhpTwinfield;

class BrowseField
{
    /** @var string */
    private $code;

    /** @var string */
    private $dataType;

    /** @var string */
    private $finder;

    /** @var BrowseFieldOption[] */
    private $options;

    /** @var bool */
    private $canOrder;

    /**
     * BrowseField constructor.
     */
    public function __construct()
    {
        $this->options = [];
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return BrowseField
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param string $dataType
     * @return BrowseField
     */
    public function setDataType(string $dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinder()
    {
        return $this->finder;
    }

    /**
     * @param string $finder
     * @return BrowseField
     */
    public function setFinder(string $finder)
    {
        $this->finder = $finder;
        return $this;
    }

    /**
     * @return BrowseFieldOption[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param BrowseFieldOption $option
     * @return BrowseField
     */
    public function addOption(BrowseFieldOption $option)
    {
        $this->options[] = $option;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanOrder()
    {
        return $this->canOrder;
    }

    /**
     * @param bool $canOrder
     * @return BrowseField
     */
    public function setCanOrder(bool $canOrder)
    {
        $this->canOrder = $canOrder;
        return $this;
    }
}
