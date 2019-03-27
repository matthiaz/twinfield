<?php

namespace PhpTwinfield;

class BrowseData
{
    /** @var int */
    private $first;

    /** @var int */
    private $last;

    /** @var int */
    private $total;

    /** @var BrowseDataHeader[] */
    private $headers;

    /** @var BrowseDataRow[] */
    private $rows;

    /**
     * BrowseData constructor.
     */
    public function __construct()
    {
        $this->headers = [];
        $this->rows = [];
    }

    /**
     * @return int
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param int $first
     * @return BrowseData
     */
    public function setFirst(int $first)
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @return int
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param int $last
     * @return BrowseData
     */
    public function setLast(int $last)
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return BrowseData
     */
    public function setTotal(int $total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return BrowseDataHeader[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param BrowseDataHeader $browseDataHeader
     */
    public function addHeader(BrowseDataHeader $browseDataHeader)
    {
        $this->headers[] = $browseDataHeader;
    }

    /**
     * @return BrowseDataRow[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param BrowseDataRow $browseDataRow
     */
    public function addRow(BrowseDataRow $browseDataRow)
    {
        $this->rows[] = $browseDataRow;
    }
}
