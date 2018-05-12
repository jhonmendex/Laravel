<?php

namespace pruebas\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use pruebas\user;
use pruebas\Customer;
class CustomerPolicy
{
    use HandlesAuthorization;

   public function owner(User $user, Customer $customer){ //esta funcion verifica si el usuario puede realizar alguna accion sobre el cliente que le corresponde
    return $user->id=== $customer->user_id;
   }
}
