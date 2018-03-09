<?php
namespace Helpers;
    public class IteratorPattern implements \IteratorAggregate{
 
        private $position;
        private $sizeList;
        private $array;
 
        function __construct($list){
            $this->position  = 0;
            $this->array = $list;
            $this->sizeList = $this->size();      
        }
 
        /*
         * @return tamaño de la lista
         */
        private function size(){
            $size = 0;
 
            foreach ($this->array as $item) {
                    $size++;
                }
 
            return $size;       
        }
 
        /*
         * @return boolean
         * 
         * Retorna true cuando el puntero (position) 
         * está dentro de la lista.
         */
        public function hasNext(){
            $result = false;
 
            if($this->position == 0 && $this->sizeList > 0){
                $result = true; 
            }else if($this->position < $this->sizeList){
                $result = true;
            }
 
            return $result;     
        }
 
        /*
         * @return item de la lista según posición
         */
        public function next(){
            $item = NULL;
 
            if($this->position < $this->sizeList){
                $item = $this->array[$this->position];
                $this->position++;
            }
 
            return $item;
        }   
 
    }
 
?>
