<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use App\Models\Host;
use App\Models\User;
use Illuminate\Http\Request;

class HostController extends Controller
{
    public function getHost(){
        $host = Host::all();
        return view('host',['user'=>$host]);
    }

    public function addPlace(Request $request){
        $host = Host::create($request -> toArray());
        return redirect()->action([HostController::class, 'getHost']);
        // error_log('masuk bjir');
        // return response($request -> all(),200);
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
