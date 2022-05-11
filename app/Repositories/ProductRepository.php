<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Repositories\Abstracts\AbstractRepository;
use App\Models\Product;

    class ProductRepository extends AbstractRepository implements ProductInterface
    {
        protected $model;

        public function __construct(Product $model)
        {
            parent::__construct($model);
        }
        
    }
