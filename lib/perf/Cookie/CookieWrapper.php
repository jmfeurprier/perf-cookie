<?php

namespace perf\Cookie;

/**
 *
 *
 */
class CookieWrapper
{

    /**
     *
     *
     * @param string $name
     * @param mixed $value
     * @param int $expirationTimestamp
     * @param string $path
     * @return bool
     */
    public function set($name, $value, $expirationTimestamp, $path)
    {
        return setcookie($name, $value, $expirationTimestamp, $path);
    }
}
