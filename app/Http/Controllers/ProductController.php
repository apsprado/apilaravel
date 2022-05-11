<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
 
    public function all()
    {
        return $this->productService->all();
    }

    public function create (Request $request)
    {
        return $this->productService->create($request->all());
    }

    public function update (Request $request, $id)
    {
        $entity = $this->productService->findOrFail($id, $request->all());
        return $entity;
    }

    public function delete($id)
    {
        $entity = $this->productService->delete($id);
        return $entity;
    }
}
