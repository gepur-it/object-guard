<?php
/**
 * @author: Marina Mileva m934222258@gmail.com
 * @since : 22.01.19 14:44
 */

namespace GepurIt\ObjectGuard;

/**
 * Interface ObjectPropsGuardInterface
 * @package GepurIt\ObjectValidator
 */
interface ObjectPropsGuardInterface
{
    /**
     * @return string
     */
    public function getGuardedClass(): string;

    /**
     * @param       $object
     * @param array $fieldsAndNewValues
     *
     * @return PropertyError[]
     */
    public function checkAccess($object, array $fieldsAndNewValues): array;

    /**
     * @param string $objectClass
     *
     * @return PropertyGuardInterface
     */
    public function getPropertyGuard(string $objectClass): PropertyGuardInterface;
}
