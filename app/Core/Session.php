<?php

namespace App\Core;

class Session
{
    /**
     * get session
     *
     * @param $key
     * @return null
     */
    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    /**
     * set session
     *
     * @param $key
     * @param $value
     */
    public static  function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * remove session by key
     *
     * @param $key
     */
    public static function remove($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    /**
     * destroy session
     */
    public static function destroy()
    {
        session_destroy();
    }
}