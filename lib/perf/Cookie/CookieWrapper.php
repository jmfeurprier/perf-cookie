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
     * @param string $value
     * @param int $expirationTimestamp
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httpOnly
     * @return bool
     */
    public function set(
        $name,
        $value = '',
        $expirationTimestamp = 0,
        $path = '',
        $domain = '',
        $secure = false,
        $httpOnly = false
    ) {
        return setcookie($name, $value, $expirationTimestamp, $path, $domain, $secure, $httpOnly);
    }

    /**
     *
     *
     * @param string $name
     * @param string $value
     * @param int $expirationTimestamp
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httpOnly
     * @return bool
     */
    public function setRaw(
        $name,
        $value = '',
        $expirationTimestamp = 0,
        $path = '',
        $domain = '',
        $secure = false,
        $httpOnly = false
    ) {
        return setrawcookie($name, $value, $expirationTimestamp, $path, $domain, $secure, $httpOnly);
    }
}
