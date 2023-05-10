<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class ListingController extends Controller
{
    public function index(Request $request, $modelName)
    {
        $adminUser = Auth::guard('admin')->user();
        //doi duong dan co 
        $model = '\App\Models\\' . ucfirst($modelName);
        $model =  new $model;
        $configs = $model->listingConfigs();
       //  $conditions = [];
       $conditions = $model ->getFilter($request,$configs);


       // $filterResult = $model ->getFilter($request,$configs,$modelName);
        //$configs = $filterResult['configs'];
       

        // $records = $model::where($conditions)->paginate(10);
        $records = $model->getRecords($conditions);

      
        return view('admin.listing', [
            'user' => $adminUser,
            'records' => $records,
            'configs' => $filterResult['configs'],
            'modelName' => $modelName,
            'title' => $model->title
        ]);
    }
}
