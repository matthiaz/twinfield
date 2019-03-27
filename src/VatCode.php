<?php

namespace PhpTwinfield;

/**
 * Class VatCode
 *
 * @author Emile Bons <emile@emilebons.nl>
 */
class VatCode
{
    /**
     * @var string The code of the VAT code.
     */
    private $code;

    /**
     * @var string The name of the VAT code.
     */
    private $name;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
