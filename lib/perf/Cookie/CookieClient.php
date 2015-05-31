<?php

namespace perf\Cookie;

/**
 *
 *
 */
class CookieClient
{

    /**
     *
     *
     * @var CookieWrapper
     */
    private $wrapper;

    /**
     * Static constructor.
     *
     * @return CookieClient
     */
    public static function createDefault()
    {
        $wrapper = new CookieWrapper();

        return new self($wrapper);
    }

    /**
     * Static constructor.
     *
     * @param CookieWrapper $wrapper
     * @return CookieClient
     */
    public static function create(CookieWrapper $wrapper)
    {
        return new self($wrapper);
    }

    /**
     * Constructor.
     *
     * @param CookieWrapper $wrapper
     * @return void
     */
    private function __construct(CookieWrapper $wrapper)
    {
        $this->wrapper = $wrapper;
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
     * @return void
     * @throws \RuntimeException
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
        if (!$this->wrapper->set($name, $value, $expirationTimestamp, $path, $domain, $secure, $httpOnly)) {
            throw new \RuntimeException('Failed to set cookie.');
        }
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
     * @return void
     * @throws \RuntimeException
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
        if (!$this->wrapper->set($name, $value, $expirationTimestamp, $path, $domain, $secure, $httpOnly)) {
            throw new \RuntimeException('Failed to set raw cookie.');
        }
    }

    /**
     *
     *
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        if (isset($_COOKIE[$name])) {
            return true;
        }

        return false;
    }

    /**
     *
     *
     * @param string $name
     * @return mixed
     */
    public function get($name)
    {
        if (isset($_COOKIE[$name])) {
            return $_COOKIE[$name];
        }

        throw new \DomainException("Cookie with name '{$name}' does not exist.");
    }

    /**
     *
     *
     * @param string $name
     * @return void
     */
    public function remove($name)
    {
        unset($_COOKIE[$name]);
    }
}
