<?php

namespace PhpTwinfield;

class BrowseDataHeader
{
    /** @var string */
    private $code;

    /** @var string */
    private $label;

    /** @var bool */
    private $hideForUser;

    /** @var string */
    private $type;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return BrowseDataHeader
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return BrowseDataHeader
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHideForUser()
    {
        return $this->hideForUser;
    }

    /**
     * @param bool $hideForUser
     * @return BrowseDataHeader
     */
    public function setHideForUser(bool $hideForUser)
    {
        $this->hideForUser = $hideForUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return BrowseDataHeader
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
}
