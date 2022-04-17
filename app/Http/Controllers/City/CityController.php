<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;
use App\Models\City as ModelsCity;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCity(){
        $city = ModelsCity::all();
        return view('city',['city'=>$city]);
    }

    public function getCityList(){
        $city = ModelsCity::all();
        return view('citylist',['city'=>$city]);
    }

    public function addCity(Request $request){
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $coba ['namecity'] = $request['namecity'];
        $coba ['nameprovince'] = $request['nameprovince'];
        $coba ['image'] = $imagename;
        $city = ModelsCity::create($coba);
        return redirect()->action([CityController::class, 'getCityList']);
        
        // error_log($request -> file('image'));
        // return response($request -> toArray(),200);
    }

    public function updateCity(Request $request){
        $city = ModelsCity::where('id', $request -> id) -> first();
        
        $city ['namecity'] = $request['namecity'];
        $city ['nameprovince'] = $request['nameprovince'];
        $city ['image'] = $request['image'];
        $city -> save();
        return redirect()->action([CityController::class, 'getCity']);
        // error_log('masuk bjir');
        
    }

    public function deleteCity(Request $request){
        $city = ModelsCity::where('id', $request -> id) -> first();
        $city -> delete();
        return redirect()->action([CityController::class, 'getCity']);
    }
}
