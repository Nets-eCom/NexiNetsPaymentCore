<?php

namespace NetsCore\Services;

use Exception;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LogsService
{
    private Logger $logger;
    private static array $instances = [];
    /**
     * The Singleton's constructor should always be private to prevent direct
     * construction calls with the `new` operator.
     */
    protected function __construct($name = 'nets') {
        $this->logger = new Logger($name);
        $this->logger->pushHandler(new StreamHandler('../var/log/' . $name . '.log'));
    }

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone() { }

    /**
     * Singletons should not be restorable from strings.
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public function getLogger(): Logger {
        return $this->logger;
    }

    public static function getInstance(): LogsService
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function info(string $key, string $message)
    {
        static::getInstance()->logger->info('[ ' . $key . ' ]: ' . $message);
    }


    public function error(string $key, string $message, bool $displayOnProd = false)
    {
        if (getenv('APP_ENV') === 'dev' || $displayOnProd) {
            static::getInstance()->logger->error('[ ' . $key . ' ]: ' . $message);
        }
    }
}
