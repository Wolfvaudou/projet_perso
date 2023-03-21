<?php
class MultipleRouteFoundException extends Exception
{
    public function __construct($message="trop de routes"){
        parent::__construct($message,"001")
    }
}
