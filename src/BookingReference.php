<?php
namespace PhpTwinfield;

final class BookingReference implements BookingReferenceInterface
{
    /**
     * @var Office
     */
    private $office;

    /**
     * @var int
     */
    private $number;

    /**
     * @var string
     */
    private $code;

    public static function fromMatchReference(MatchReferenceInterface $matchReference)
    {
        return new self(
            $matchReference->getOffice(),
            $matchReference->getCode(),
            $matchReference->getNumber()
        );
    }

    public function __construct(Office $office, string $code, int $number)
    {
        $this->office = $office;
        $this->code   = $code;
        $this->number = $number;
    }

    /**
     * @inheritdoc
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @inheritdoc
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @inheritdoc
     */
    public function getNumber()
    {
        return $this->number;
    }
}