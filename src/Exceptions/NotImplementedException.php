<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

NotImplementedException

*/

namespace liamcrayden\NHSDigital\Exceptions;
use Exception;

class NotImplementedException extends Exception
{

    public function __construct($code = 0, Exception $previous = null)
    {
        $this->message = 'This function is not yet implemented in this library.';
        parent::__construct( $this->message, $code, $previous );
    }

    public function __toString() {
        return __CLASS__ . ": [" . $this->code . "] {$this->message}\n";
    }

}
