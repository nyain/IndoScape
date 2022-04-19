<?php

namespace App\Http\Controllers\Penginapan;

use App\Http\Controllers\Controller;
use App\Models\Penginapan as ModelsPenginapan;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    //
    public function getPenginapan(){
        $penginapan = ModelsPenginapan::all();
        return view('penginapan',['penginapan'=>$penginapan]);
    }

    public function getPenginapanList(){
        $penginapan = ModelsPenginapan::all();
        return view('penginapanlist',['penginapan'=>$penginapan]);
    }
    public function editPenginapan(Request $request){
        $penginapan = ModelsPenginapan::where('id', $request -> id) -> first();
        return view('editpenginapan',['penginapan'=>$penginapan]);
    }

    public function addPenginapan(Request $request){
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $coba ['namecity'] = $request['namecity'];
        $coba ['tempatwisata'] = $request['tempatwisata'];
        $coba ['image'] = $imagename;
        $coba ['penginapan'] = $request['penginapan'];
        $coba ['harga'] = $request['harga'];
        $coba ['deskripsi'] = $request['deskripsi'];
        $penginapan = ModelsPenginapan::create($coba);
        return redirect()->action([PenginapanController::class, 'getPenginapanList']);
        
        // error_log($request -> file('image'));
        // return response($request -> toArray(),200);
    }

    public function updatePenginapan(Request $request){
        $penginapan = ModelsPenginapan::where('id', $request -> id) -> first();
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $penginapan ['namecity'] = $request['namecity'];
        $penginapan ['tempatwisata'] = $request['tempatwisata'];
        $penginapan ['image'] = $imagename;
        $penginapan ['penginapan'] = $request['penginapan'];
        $penginapan ['harga'] = $request['harga'];
        $penginapan ['deskripsi'] = $request['deskripsi'];
        
        $penginapan -> save();
        return redirect()->action([PenginapanController::class, 'getPenginapanList']);
    }

    public function deletePenginapan(Request $request){
        $penginapan = ModelsPenginapan::where('id', $request -> id) -> first();
        $penginapan -> delete();
        return redirect()->action([PenginapanController::class, 'getPenginapanList']);
    }
}
