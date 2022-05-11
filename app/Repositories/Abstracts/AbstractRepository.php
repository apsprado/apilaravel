<?php

   namespace App\Repositories\Abstracts;

   use App\Interfaces\Abstracts\AbstractInterface;

    class AbstractRepository implements AbstractInterface
    {
        protected $model;

        public function __construct($model)
        {
            $this->model = $model;
        }

        public function fill($data)
        {
            return $this->model->fill($data);
        }

        public function all()
        {
            return $this->model->all();
        }

        public function find($id)
        {
         return $this->model->find($id);
        }

        public function findOrFail($id)
        {   
         return $this->model->findOrFail($id);
        }

        public function where($column , $value)
        {
          return $this->model->where($column, $value);
        }

        public function firstWhere($column, $value)
        {
            return $this->model->firstWhere($column, $value);
        }

        public function whereIn($column, $value)
        {
            return $this->model->whereIn($column, $value);
        }

        public function create ($attributes)
        {
            return $this->model->create($attributes);
        }

        public function update ($attributes,$id)
        {
          $entity = $this->model->findOrFail($id);
          $entity->update($attributes);

          return $entity;
        }

        public function delete($id)
        {
          $entity = $this->model->findOrFail($id);
          $entity->delete($id);

          return $entity;
        }

    }