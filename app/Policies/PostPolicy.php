<?php

namespace App\Policies;

use App\Model\admin\Admin;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\admin\Admin  $user
     * @param  \App\Model\user\Post  $post
     * @return mixed
     */
    public function view(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\admin\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
      return $this->getPermission($user,1);
        
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\admin\Admin  $user
     * @param  \App\Model\user\Post  $post
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,7);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\admin\Admin  $user
     * @param  \App\Model\user\Post  $post
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,6);
    }
    
    protected function getPermission($user,$p_id){
        
         foreach($user->roles as $role){
           foreach($role->permissions as $permission){
               if($permission->id == $p_id){
                   return true;
               }
           }
       }
       return false;
    }
}
