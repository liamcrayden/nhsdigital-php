<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

InvalidCommentIDException

*/

namespace liamcrayden\NHSDigital\Exceptions;
use Exception;

class InvalidCommentIDException extends Exception
{

    public function __construct($commentID, $code = 0, Exception $previous = null)
    {

        $this->message = 'The comment ID "' . $commentID . '" is not valid.' . PHP_EOL;
        parent::__construct( $this->message, $code, $previous );

    }

    public function __toString() {
        return __CLASS__ . ": {$this->message}\n";
    }

}
