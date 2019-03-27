<?php

namespace PhpTwinfield;

class BrowseDataRow
{
    /** @var Office */
    private $office;

    /** @var string */
    private $code;

    /** @var int */
    private $number;

    /** @var int */
    private $line;

    /** @var BrowseDataCell[] */
    private $cells;

    /**
     * BrowseDataRow constructor.
     */
    public function __construct()
    {
        $this->cells = [];
    }

    /**
     * @return Office
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param Office $office
     * @return BrowseDataRow
     */
    public function setOffice(Office $office)
    {
        $this->office = $office;
        return $this;
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
     * @return BrowseDataRow
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return BrowseDataRow
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param int $line
     * @return BrowseDataRow
     */
    public function setLine(int $line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return BrowseDataCell[]
     */
    public function getCells()
    {
        return $this->cells;
    }

    /**
     * @param BrowseDataCell $browseDataCell
     */
    public function addCell(BrowseDataCell $browseDataCell)
    {
        $this->cells[] = $browseDataCell;
    }
}
