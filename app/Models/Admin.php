<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Admin extends Base implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    public $title = "Quản trị viên";

    public function listingConfigs()
    {
            $defaultListingConfigs = parent::defaultListingConfigs();

            $listingConfigs = array(
                array (
                    'field' => "id",
                    'name' => "ID",
                    'type' => 'text'
                ),
                array (
                    'field' => "name",
                    'name' => "Tên admin",
                    'type' => 'text'
                ),
                array (
                    'field' => "email",
                    'name' => "Email",
                    'type' => 'text'
                ),
                array (
                    'field' => "created_at",
                    'name' => "created_at",
                    'type' => 'text'
                ),
                array (
                    'field' => "updated_at",
                    'name' => "updated_at",
                    'type' => 'text'
                ),
                
               
            );
            
            return array_merge($listingConfigs, $defaultListingConfigs);
        
        
        }

   
        
    

}
