<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemssController extends Controller
{
    public function index(){
        $conteo = Item::all()->count();
        $items = Item::orderBy('created_at','asc')->paginate(8);

        return view('items.index',compact('items','conteo'));
    }

    public function store(Request $request){
        $validate = $this->validate($request,[
            'nombre' =>'required|string',
            'cantidad' => 'required|integer'
        ]);
        $nombre    = $request->input('nombre');
        $cantidad  = $request->input('cantidad');

        $save = Item::create([
            'nombre'  => $nombre,
            'cantidad'=> $cantidad
        ]);

        return  redirect()->route('items.index')
        ->with(['message'=>'Item Guardado']);

    }

    public function destroy($id){
        $item = Item::find($id)->delete();
        return  redirect()->route('items.index')
        ->with(['message'=>'Item eliminado']);

    }
}
