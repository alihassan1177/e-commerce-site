<?php

class Product extends Model
{
    public function create(array $val)
    {
        $this->write('products', ["`name`"], $val);
    }
    public function all()
    {
        return $this->read('products');
    }

    public function getProductCategory(int $id)
    {
        return $this->getById($id, "categories");
    }
}
