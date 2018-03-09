<?php
   namespace App\Helpers;

  class ArrayList implements \ArrayAccess, \Countable, \IteratorAggregate{
 
     private $array;
 
    public function __construct() {
      $this->array = array();
    }  

    protected function normalizeKey($key)
    {
        return $key;
    }

    /**
     * Set data key to value
     * @param string $key   The data key
     * @param mixed  $value The data value
     */
    public function set($key, $value)
    {
        $this->array[$this->normalizeKey($key)] = $value;
    }

     public function replace($items)
    {
        foreach ($items as $key => $value) {
            $this->set($key, $value); // Ensure keys are normalized
        }
    }

    /**
     * Fetch set data
     * @return array This set's key-value data array
     */

    public function all()
    {
        return $this->array;
    }

    /**
     * Fetch set data keys
     * @return array This set's key-value data array keys
     */
    public function keys()
    {
        return array_keys($this->array);
    }

    /**
     * Does this set contain a key?
     * @param  string  $key The data key
     * @return boolean
     */
    public function has($key)
    {
        return array_key_exists($this->normalizeKey($key), $this->array);
    }

 
        /*
         * Limpia el array()
         */
        public function clear(){
            $this->array = array();
        }
 
        /*
         * @param $item
         * 
         * Agrega un nuevo item al array
         */
            public function add($item){
                $this->array[] = $item ;
            }
 
        /*
         * @return array como una cadena de string
         */
            public function toString(){
                $cadena = array();
                foreach ($this->all() as $item) {
                    $cadena[] = $item->toString();
                }
                return $cadena;
            }
 
        /*
         * @param $item
         * 
         * Remueve un item determinado del array
         */
            public function remove($item){
                unset($this->array[$this->normalizeKey($item)]);
            }
 
        /*
         * @param $item
         * 
         * Retorna un item determinado
         */
            public function get($item){
            return $this->array[$item];
            }

            /**
     * Property Overloading
     */

    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($key, $value)
    {
        $this->set($key, $value);
    }

    public function __isset($key)
    {
        return $this->has($key);
    }

    public function __unset($key)
    {
        return $this->remove($key);
    }
/**
     * Array Access
     */

    public function offsetExists($offset)
    {
        return $this->has($offset);
    }

    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    public function offsetUnset($offset)
    {
        $this->remove($offset);
    }

    /**
     * Countable
     */

    public function count()
    {
        return count($this->array);
    }

    /**
     * IteratorAggregate
     */

    public function getIterator()
    {
        return new \ArrayIterator($this->array);
    }

    /**
     * Ensure a value or object will remain globally unique
     * @param  string  $key   The value or object name
     * @param  Closure        The closure that defines the object
     * @return mixed
     */
    public function singleton($key, $value)
    {
        $this->set($key, function ($c) use ($value) {
            static $object;

            if (null === $object) {
                $object = $value($c);
            }

            return $object;
        });
    }

    /**
     * Protect closure from being directly invoked
     * @param  Closure $callable A closure to keep from being invoked and evaluated
     * @return Closure
     */
    public function protect(\Closure $callable)
    {
        return function () use ($callable) {
            return $callable;
        };
    }
 
        /*
         * @return tamaño del array
         */
        public function size(){
                $size = 0;
                foreach ($this->array as $item) {
                    $size++;
                }
                return $size;
            }
 
    }
?>