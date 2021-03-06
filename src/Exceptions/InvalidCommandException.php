<?php

namespace NASA\Exceptions;

/**
 * Class InvalidCommandException
 *
 * @package NASA\Exceptions
 * @author Philippe Vanzin Moreira
 */
class InvalidCommandException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Command provided is not valid');
    }
}