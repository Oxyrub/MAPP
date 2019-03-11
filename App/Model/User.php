<?php

class User {

    public static function ToSession($user)
    {
        return serialize($user);
    }

    public static function FromSession($userSession)
    {
        return unserialize($userSession);
    }

    //public static function 
 }