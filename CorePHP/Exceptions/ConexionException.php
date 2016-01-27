<?php

namespace CorePHP\Exceptions;


class ConexionException extends \Exception
{
    /**
     * DirectoryUtilsExeptions constructor.
     * @param string|null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(string $message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     * Impresion personalizada del objeto
     */
    public function __toString() : string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}