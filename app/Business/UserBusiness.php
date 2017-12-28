<?php
/**
 * Sample
 *
 * @author RikkeiSoft
 * @date YYYY/MM/DD
 */

namespace App\Business;

use DB;
use Exception;

class UserBusiness extends Business
{
    public function search($name, $email, $phone, $listUser = null)
    {
        $query = DB::table('users');

        if ($name) {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($email) {
            $query->where('email', 'LIKE', '%' . $email . '%');
        }

        if ($phone) {
            $query->where('contact_number', 'LIKE', '%' . $phone . '%');
        }

        return $query->paginate(2);
    }


}