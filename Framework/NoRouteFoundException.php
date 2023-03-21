<?php
class NoRouteFoundException extends Exception
{
    public function __construct($message="pas de routes"){
        parent::__construct($message,"002");
    }
}
