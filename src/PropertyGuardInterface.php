<?php
/**
 * @author: Marina Mileva m934222258@gmail.com
 * @since: 22.01.19 14:55
 */

namespace GepurIt\ObjectGuard;

/**
 * Interface PropertyGuardInterface
 * @package GepurIt\ObjectValidator
 */
interface PropertyGuardInterface
{
    /**
     * @return string
     */
    public function getFieldName(): string;

    /**
     * @param $object
     * @param $newValue
     * @return PropertyError|null
     */
    public function check($object, $newValue): ?PropertyError;
}
