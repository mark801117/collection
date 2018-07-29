<?php
namespace Cloud\Collection;

/**
 * Description of Collection
 * 收集器
 * @author cloud
 */
class Collection 
{
    private $collection;
    
    public function __construct() 
    {
        $this->collection = [];
    }
    
    public function push($id, $item)
    {
        $this->collection[$id] = $item;
    }
    
    public function merge($id, $item)
    {
        if ($this->exist($id)) {
            $item = !is_array($item) ? [$item] : $item;
            $this->collection[$id] = array_merge($this->collection[$id], $item);
        } else {
            $this->push($id, $item);
        }
    }
    
    public function get($id)
    {
        return $this->collection[$id];
    }
    
    public function getCollection()
    {
        return $this->collection;
    }
    
    public function clear()
    {
        $this->collection = [];
    }
    
    public function exist($id)
    {
        return isset($this->collection[$id]);
    }
    
}