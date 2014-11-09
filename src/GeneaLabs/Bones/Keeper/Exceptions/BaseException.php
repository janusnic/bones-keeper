<?php namespace GeneaLabs\Bones\Keeper\Exceptions;

use \Exception;

/**
 * Class BaseException
 * @package GeneaLabs\Bones\Keeper\Exceptions
 */
class BaseException extends Exception
{
    /**
     * @param $property
     * @throws Exception
     */
    public function __get($property)
    {
        $getter = 'get' . $property;
        if (method_exists($this, $getter))
        {
            return $this->$getter();
        } else {
            throw new \Exception("Non-existent property: $property");
        }
    }

    /**
     * @param $property
     * @param $value
     * @throws Exception
     */
    public function __set($property, $value)
    {
        $setter = 'set' . $property;
        if (method_exists($this, $setter))
        {
            $this->$setter($value);
        } else {
            if (method_exists($this, 'get' . $property))
            {
                throw new \Exception("property $property is read-only");
            } else {
                throw new \Exception("Inexistent property: $property");
            }
        }
    }
}