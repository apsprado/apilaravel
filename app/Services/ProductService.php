<?php

namespace App\Services;

use App\Interfaces\ProductInterface;
use   App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    private $productService;

    public function __construct(ProductInterface $productService)
    {

        $this->productService = $productService;

    }

    public function all() : Collection
    {
        return $this->productService->all();
    }

    public function create(array $data) :  Product
    {
        return $this->productService->create($data);
    }

    public function update(array $data, int $id) :  Product
    {
        return $this->productService->update($data, $id);
    }

    public function findOrFail(int $id, array $data) : mixed
    {
        $data = $this->productService->findOrFail($id);

        if($data)
        {
            return $this->update($data,$id);
        }
        return $data;
    }

    public function delete(int $id) : bool
    {
        return $this->productService->find($id)->delete();
    }


    


}
