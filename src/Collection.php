<?php
namespace Cloud\Collection;

/**
 * Description of Collection
 * 收集器
 * @author cloud
 */
class Collection 
{
    protected $collection;
    
    public function __construct() 
    {
        $this->collection = [];
    }
    
    public function push($item)
    {
        $this->collection[] = $item;
    }
    
    /**
     * 
     * @return array ValidFields
     */
    public function getCollection()
    {
        return $this->collection;
    }
    
    /**
     * clear collection
     * 清除收集器
     */
    public function clear() {
        $this->collection = [];
    }
}