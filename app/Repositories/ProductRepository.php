<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface{
    protected $model;

    public function __construct(Product $product){
        $this->model = $product;
    }    

    public function all(){
        return $this->model->all();
    }

    public function create(array $data){
        return $this->model->create($data);
    }
    
    public function update(array $data, $id){
        return $this->model->where('id', $id)->update($data);
    }
    
    public function delete($id){
        return $this->model->destroy($id);
    }

    public function find($id){
        return $this->model->find($id);
    }

}