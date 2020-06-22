<?php

namespace App\Repositories;

use App\Models\User;
// use App\Repositories\UserRepositoryInterface;

use Illuminate\Database\Eloquent\Model;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Return all user formated value
     */
    public function all()
    {
        return User::with('address')
        ->get()
        ->map->format();
    }

    /**
     * Return user by user_id
     *
     * @param $id -> user id
     */
    public function findById($id)
    {
        return User::where('id', $id)
            ->with('address')
            ->firstOrFail()
            ->format();
    }

    /**
     * Find user by id and update name
     *
     * @param $id -> user id
     */
    public function update($id)
    {
        $user = User::findOrFail($id);
        return $user->update(request()->only('name'));
    }
    
    /**
     * Delete user by id
     *
     * @param $id -> user id
     */
    public function delete($id)
    {
        return User::where('id', $id)->delete();
    }
}
