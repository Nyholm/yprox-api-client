<?php
declare(strict_types=1);

namespace Yproximite\Api\Message\CallTracking;

use Yproximite\Api\Message\MessageInterface;
use Yproximite\Api\Message\SiteAwareMessageTrait;

/**
 * Class AbstractCallTrackingMessage
 */
abstract class AbstractCallTrackingMessage implements MessageInterface
{
    use SiteAwareMessageTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $phoneDid;

    /**
     * @var string
     */
    private $phoneDestination;

    /**
     * @var bool
     */
    private $callerId;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getPhoneDid()
    {
        return $this->phoneDid;
    }

    /**
     * @param null|string $phoneDid
     */
    public function setPhoneDid(string $phoneDid = null)
    {
        $this->phoneDid = $phoneDid;
    }

    /**
     * @return string
     */
    public function getPhoneDestination(): string
    {
        return $this->phoneDestination;
    }

    /**
     * @param string $phoneDestination
     */
    public function setPhoneDestination(string $phoneDestination)
    {
        $this->phoneDestination = $phoneDestination;
    }

    /**
     * @return boolean
     */
    public function hasCallerId(): bool
    {
        return $this->callerId;
    }

    /**
     * @param boolean $callerId
     */
    public function setCallerId(bool $callerId)
    {
        $this->callerId = $callerId;
    }
}
