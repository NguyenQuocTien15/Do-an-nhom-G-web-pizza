<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Base
{
    use HasFactory;
    public $title = "Sản phẩm";
    public function listingConfigs()
    {
        $defaultListingConfigs = parent::defaultListingConfigs();

        $listingConfigs = array(
            // array (
                
            //     'field' => "Category_id",
            //    'name' => "Category_id",
            //    'type' => 'text'
            // ),
          
           array (
               'field' => "name",
               'name' => "Tên sản phẩm",
               'type' => 'text',
               'filter' => 'like'
           ),
           array (
               'field' => "image",
               'name' => "Ảnh sản phẩm",
               'type' => 'image'
           ),
           
           array (
               'field' => "quantity",
               'name' => "Số lượng sản phẩm",
               'type' => 'text',
               'filter' => 'equal'
           ),
           array (
               'field' => "price",
               'name' => "Giá sản phẩm",
               'type' => 'number',
               'filter' => 'between'
           ),
           array (
               'field' => "count_buy",
               'name' => "count buy",
               'type' => 'text'
           )
          
   
           );
       
             
              
           
   
           return array_merge($listingConfigs, $defaultListingConfigs);
    }
   

}
