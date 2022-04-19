<?php

namespace App\Http\Controllers\City;

use App\Http\Controllers\Controller;
use App\Models\City as ModelsCity ;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCity(){
        $city = ModelsCity::all();
        return view('tambahKota',['city'=>$city]);
    }

    public function getCityList(){
        $city = ModelsCity::all();
        return view('kota',['city'=>$city]);
    }
    public function editCity(Request $request){
        $city = ModelsCity::where('id', $request -> id) -> first();
        return view('editkota',['city'=>$city]);
        // return response($request,200);
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
    }

    public function updateCity(Request $request){
        $city = ModelsCity::where('id', $request -> id) -> first();
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $city ['namecity'] = $request['namecity'];
        $city ['nameprovince'] = $request['nameprovince'];
        $city ['image'] = $imagename;
        $city -> save();
        return redirect()->action([CityController::class, 'getCityList']);
        
    }

    public function deletecity(Request $request){
        $city = ModelsCity::where('id', $request -> id) -> first();
        $city -> delete();
        return redirect()->action([CityController::class, 'getCityList']);
    }
}
