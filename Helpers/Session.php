<?php
class Session
{
 
    function __construct()
    {
        session_start();
    }
 
    static function setAttribute($attribute, $value)
    {
        if (session_status() === PHP_SESSION_ACTIVE 
            && is_string($attribute)) {
            $_SESSION[$attribute] = $value;
        }
    }
 
    static function getAttribute($attribute)
    {
        if (session_status() === PHP_SESSION_ACTIVE 
            && is_string($attribute) 
            && isset($_SESSION[$attribute])) {
            return $_SESSION[$attribute];
        }
        return null;
    }
 
    static function deleteAttribute($attribute)
    {
        if (session_status() === PHP_SESSION_ACTIVE 
            && is_string($attribute) 
            && isset($_SESSION[$attribute])) {
            unset($_SESSION[$attribute]);
        }
    }
 
    static function destroySession()
    {
        session_destroy();
    }
}
 
?>