<?php
namespace Singleton;

class Singleton {
    
    /**
     * @var Singleton reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Protected constructor to prevent creating a new instance
     * of the *Singleton* via the new operator from outside of this class.
     */
    protected function __construct()
    {
    }
    
    /**
     * Returns the *Singleton* instance of this class
     *
     * @return Singleton the *Singleton* instance
     */
    public static function getInstance()
    {
        if(null === static::$instance)
            static::$instance = new static();

        return static::$instance;
    }
    
    /**
     * Private clone method to prevent cloning of the instance
     * of the *Singleton* instance
     */
    private function __clone()
    {
        
    }
    
    /**
     * Private unserialize method to prevent inserializing of the
     * *Singleton* instance
     */
    private function __wakeup()
    {
        
    }
    
}