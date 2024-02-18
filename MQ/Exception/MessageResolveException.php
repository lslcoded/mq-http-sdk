<?php

namespace MQ\Exception;

use MQ\Model\MessagePartialResult;

class MessageResolveException extends MQException
{
    private $partialResult;

    public function __construct($code, $message, MessagePartialResult $result,
                                $previousException , $onsErrorCode , $requestId, $hostId = NULL)
    {
        !$previousException && $previousException = NULL;
        !$onsErrorCode && $onsErrorCode = NULL;
        !$requestId && $requestId = NULL;
        parent::__construct($code, $message, $previousException, $onsErrorCode, $requestId, $hostId);
        $this->partialResult = $result;
    }

    /**
     * @return MessagePartialResult
     */
    public function getPartialResult()
    {
        return $this->partialResult;
    }


}

?>