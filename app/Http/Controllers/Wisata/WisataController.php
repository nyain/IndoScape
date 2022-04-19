<?php

namespace App\Http\Controllers\Wisata;

use App\Http\Controllers\Controller;
use App\Models\Wisata as ModelsWisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function getWisata()
    {
        $wisata = ModelsWisata::all();
        return view('wisata', ['wisata' => $wisata]);
    }

    public function getWisataList()
    {
        $wisata = ModelsWisata::all();
        return view('wisatalist', ['wisata' => $wisata]);
    }

    public function editWisata(Request $request){
        $wisata = ModelsWisata::where('id', $request -> id) -> first();
        return view('editwisata',['wisata'=>$wisata]);
    }

    public function addWisata(Request $request)
    {
        $document = $request->file('image');
        $imagename = time() . "." . $document->extension();
        $document->move(public_path('images'), $imagename);
        $coba['image'] = $imagename;
        $coba['namecity'] = $request['namecity'];
        $coba['nameplace'] = $request['nameplace'];
        $wisata = ModelsWisata::create($coba);
        return redirect()->action([WisataController::class, 'getWisataList']);
    }

    public function updateWisata(Request $request)
    {
        $wisata = ModelsWisata::where('id', $request->id)->first();
        $document = $request->file('image');
        $imagename = time() . "." . $document->extension();
        $document->move(public_path('images'), $imagename);
        $wisata['image'] = $imagename;
        $wisata['namecity'] = $request['namecity'];
        $wisata['nameplace'] = $request['nameplace'];
        
        $wisata->save();
        return redirect()->action([WisataController::class, 'getWisataList']);
    }

    public function deleteWisata(Request $request)
    {
        $wisata = ModelsWisata::where('id', $request->id)->first();
        $wisata->delete();
        return redirect()->action([WisataController::class, 'getWisataList']);
    }

    public function edit(Request $request)
    {
        return view('wisatas.edit', compact('wisata'));
    }
}
