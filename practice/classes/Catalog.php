<?php
class Catalog
{
    # Properties. e.g.:
    public $products = [];

    # Methods. e.g.:
    public function __construct($dataSource) 
    {
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json, true);
        
    }
    
    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        var_dump('You invoked get by id with the id of '.$id);
        return $this->products[$id];
        // return 'This method should return details about a specific product';
    }
    public function searchByName(string $term) 
    {
        $results = [];
        foreach($this->products as $product) {
            if(strstr($product['name'], $term)) {
                $results[] = $product;
            }
        }
        return $results;


    }

}