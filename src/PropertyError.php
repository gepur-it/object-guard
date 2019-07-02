<?php
/**
 * @author: Marina Mileva m934222258@gmail.com
 * @since : 22.01.19 14:57
 */

namespace GepurIt\ObjectGuard;

/**
 * Interface PropertyErrorInterface
 * @package GepurIt\ObjectGuard
 */
class PropertyError
{
    /**
     * @var string fieldName
     */
    private $fieldName;

    /**
     * @var mixed oldValue
     */
    private $oldValue;

    /**
     * @var mixed newValue
     */
    private $newValue;

    /**
     * @var string message
     */
    private $message;

    /**
     * PropertyError constructor.
     *
     * @param string $fieldName
     * @param string $message
     * @param mixed  $newValue
     * @param mixed  $oldValue
     */
    public function __construct(string $fieldName, string $message, $newValue, $oldValue = null)
    {
        $this->fieldName = $fieldName;
        $this->message   = $message;
        $this->newValue  = $newValue;
        $this->oldValue  = $oldValue;
    }

    /**
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    /**
     * @return mixed|null
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * @return mixed
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
