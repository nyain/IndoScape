<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use App\Models\Host;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class HostController extends Controller
{
    public function getHost(){
        $host = Host::all();
        return view('host',['user'=>$host]);
    }

    public function getHostList(){
        $host = Host::all();
        return view('hostlist',['user'=>$host]);
    }

    public function addPlace(Request $request){
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $coba ['name'] = $request['name'];
        $coba ['price'] = $request['price'];
        $coba ['description'] = $request['description'];
        $coba ['image'] = $imagename;
        $host = Host::create($coba);
        return redirect()->action([HostController::class, 'getHostList']);
        
        // error_log($request -> file('image'));
        // return response($request -> toArray(),200);
    }

    public function updatePlace(Request $request){
        $host = Host::where('id', $request -> id) -> first();
        
        $host ['name'] = $request['name'];
        $host ['price'] = $request['price'];
        $host ['description'] = $request['description'];
        $host ['image'] = $request['image'];
        $host -> save();
        return redirect()->action([HostController::class, 'getHost']);
        // error_log('masuk bjir');
        
    }

    public function deleteplace(Request $request){
        $host = host::where('id', $request -> id) -> first();
        $host -> delete();
        return redirect()->action([HostController::class, 'getHost']);
    }
}
