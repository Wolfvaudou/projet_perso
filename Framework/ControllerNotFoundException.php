<?php
class ControllerNotFoundException extends Exception
{
    public function __construct($message="pas de controlleur"){
        parent::__construct($message,"002");
    }
}
