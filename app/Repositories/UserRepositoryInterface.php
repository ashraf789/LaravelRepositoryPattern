<?php
namespace App\Repositories;

interface UserRepositoryInterface
{
    public function all();

    public function findById($id);

    public function update($id);
    
    public function delete($id);
}
