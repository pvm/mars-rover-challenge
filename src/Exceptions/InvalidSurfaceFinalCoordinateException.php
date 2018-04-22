<?php

namespace NASA\Exceptions;

class InvalidSurfaceFinalCoordinateException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Final coordinate of surface is invalid');
    }
}