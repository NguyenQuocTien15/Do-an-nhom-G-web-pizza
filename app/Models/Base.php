<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class Base extends Model
{
    use HasFactory;
    public function getRecords($conditions)
    {
        $per_page = 10;
        return  self::where($conditions)->paginate($per_page);
    }

    public function getFilter($request, $configs,$modelName)
    {
        $conditions = [];
       // $modelFilter = Cookie::get(strtolower($modelName).'_filter');
        if ($request->method() == "POST") {
            foreach ($configs as &$config) {
                if (!empty($config['filter'])) {
                    $value = $request->input($config['field']);
                    switch ($config['filter']) {
                        case "equal":
                            if (!empty($value)) {
                                $conditions[] = [
                                    'field' => $config['field'],
                                    'condition' => '=',
                                    'value' => $value


                                ];
                                $config['filter_value']=$value;
                            }


                            break;
                        case "like":
                            $conditions[] = [
                                'field' => $config['field'],
                                'condition' => 'like',
                                'value' => '%'.$value.'%'


                            ];
                            $config['filter_value']=$value;



                            break;
                        case "between":
                            if (!empty($value['from'])) {
                                $conditions[] = [
                                    'field' => $config['field'],
                                    'condition' => '>=',
                                    'value' => $value['from']

                                ];
                                $config['filter_from_value']=$value['from'];
                            }
                            if (!empty($value['to'])) {
                                $conditions[] = [
                                    'field' => $config['field'],
                                    'condition' => '<=',
                                    'value' => $value['to']

                                ];
                                $config['filter_to_value']=$value['to'];
                            }

                            break;
                    }
                }
                if(!empty($conditions)){
                    Cookie::queue(strtolower($modelName).'_filter',json_encode($conditions), 24 * 60);
                }
                else { //method get
                    $conditions = json_decode (Cookie::get(strtolower($modelName).'_filter'));
                    if (!empty($conditions)) {
                        foreach ($conditions as &$condition) {
                            $condition = (array) $condition;
                            foreach ($configs as &$config) {
                                if(($config['field']== $condition['field']) ){
                                    switch (($config['filter'])) {
                                        case "equal":
                                            $config['filter_value'] = $condition['value'];
                                            break;
                                        case "like":
                                           
                                            $config['filter_value'] = str_replace("%","",$condition['value']);
                                            break;
                                        case "between":
                                           if ($condition['condition']== ">=") {
                                            $config['filter_from_value'] = str_replace("%","",$condition['value']);
                                           }
                                           else {
                                            $config['filter_to_value'] = str_replace("%","",$condition['value']);
                                           }
                                           
                                            break;
                                        
                                       
                                    }
                                }
                            }
                        }
                    }
                    
                }
            }
           
        }
        return array(

        '$conditions' => $conditions, 
        '$configs' => $configs, 
        );

        //     $conditions = [
        //         [
        //             'field' => 'id',
        //             'where' => '=',
        //             'value' => 5
        //         ],
        //         [
        //             'field' => 'name',
        //             'where' => 'like',
        //             'value' => '%' . 'pizza rau cu thap cam' . '%'
        //         ],
        //         [
        //             'field' => 'price',
        //             'where' => '>=',
        //             'value' => 100000
        //         ],
        //         [
        //             'field' => 'price',
        //             'where' => '<=',
        //             'value' => 200000
        //         ],


        //     ];
    }
    public function defaultListingConfigs()
    {
        return array(

            array(
                'field' => "copy",
                'name' => "Copy",
                'type' => 'copy'
            ),
            array(
                'field' => "edit",
                'name' => "Sửa",
                'type' => 'edit'
            ),
            array(
                'field' => "delete",
                'name' => "Xóa",
                'type' => 'delete'
            )
        );
    }
}
