<?php 
    
    namespace App\Interfaces\Abstracts;

    interface AbstractInterface 
    {
        public function fill( array $data);

        public function all();

        public function find(int $id);

        public function findOrFail(int $id);

        public function where(string $column , $value);

        public function firstWhere(string $column, $value);

        public function whereIn(string $column, array $array);

        public function create (array $attributes);

        public function update (array $attributes, int $id);

        public function delete(int $id);
    }