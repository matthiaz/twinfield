<?php

namespace PhpTwinfield\Response;

use Webmozart\Assert\Assert;

class MappedResponseCollection extends \ArrayObject
{
    /**
     * @param mixed $value
     *
     * @throws \InvalidArgumentException
     */
    public function append($value)
    {
        if (!($value instanceof IndividualMappedResponse)) {
            throw new \InvalidArgumentException("Value has to be an object of type " . IndividualMappedResponse::class);
        }
        parent::append($value);
    }

    public function hasSuccessfulResponses()
    {
        return $this->countResponses(true) > 0;
    }

    public function countSuccessfulResponses()
    {
        return $this->countResponses(true);
    }

    /**
     * @return IndividualMappedResponse[]
     */
    public function getSuccessfulResponses()
    {
        return $this->getResponses(true);
    }

    public function hasFailedResponses()
    {
        return $this->countResponses(false) > 0;
    }

    public function countFailedResponses()
    {
        return $this->countResponses(false);
    }

    /**
     * @return IndividualMappedResponse[]
     */
    public function getFailedResponses()
    {
        return $this->getResponses(false);
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function assertAllSuccessful()
    {
        Assert::eq($this->countResponses(false), 0);
    }

    /**
     * @var bool $successful
     *
     * @return IndividualMappedResponse[]
     */
    private function getResponses(bool $successful)
    {
        $responses = [];

        /** @var IndividualMappedResponse $response */
        foreach ($this as $response) {
            if ($response->isSuccessful() === $successful) {
                $responses[] = $response;
            }
        }

        return $responses;
    }

    private function countResponses(bool $successful)
    {
        $count = 0;

        /** @var IndividualMappedResponse $response */
        foreach ($this as $response) {
            if ($response->isSuccessful() === $successful) {
                $count++;
            }
        }

        return $count;
    }
}
