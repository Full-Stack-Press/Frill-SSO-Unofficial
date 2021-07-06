<?php

namespace frill\sso;

if (!\class_exists('SodiumException', \false)) {
    /**
     * Class SodiumException
     */
    class SodiumException extends \Exception
    {
    }
}
