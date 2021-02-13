<?php

namespace Boatrace\Analytics;

use DI\Container;
use DI\ContainerBuilder;

/**
 * @author shimomo
 */
class Trimmer
{
    /**
     * @var \Boatrace\Analytics\MainTrimmer
     */
    protected $trimmer;

    /**
     * @var \Boatrace\Analytics\Trimmer
     */
    protected static $instance;

    /**
     * @var \DI\Container
     */
    protected static $container;

    /**
     * @param  \Boatrace\Analytics\MainTrimmer  $trimmer
     * @return void
     */
    public function __construct(MainTrimmer $trimmer)
    {
        $this->trimmer = $trimmer;
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->trimmer, $name], $arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return call_user_func_array([self::getInstance(), $name], $arguments);
    }

    /**
     * @return \Boatrace\Analytics\Trimmer
     */
    public static function getInstance(): Trimmer
    {
        return self::$instance ?? self::$instance = (
            self::$container ?? self::$container = self::getContainer()
        )->get('Trimmer');
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;

        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');

        return $builder->build();
    }
}
