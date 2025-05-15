<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;
use App\Http\Requests\StoreTevekenysegRequest;
use App\Http\Requests\UpdateTevekenysegRequest;
use App\Models\Kategoria;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class TevekenysegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tevekenysegek = Tevekenyseg::with('kategoria:id,katnev')->get();
        return response()->json($tevekenysegek);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tevekenyseg = new Tevekenyseg();
        $tevekenyseg->fill($request->all());
        $tevekenyseg->save();

        return response()->json([
            'message'=>'Oké'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tevekenysegek = Kategoria::with('tevekenyseg')->find($id);
        return response()->json($tevekenysegek);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTevekenysegRequest $request, Tevekenyseg $tevekenyseg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Tevekenyseg::find($id)->delete();
       

        return response()->json([
            'message'=>'Oké'
        ]);
    }

    public function put(Request $request, $id)
    {
        $tevekenyseg = Tevekenyseg::find($id);
        $tevekenyseg->id = $request->id;
        $tevekenyseg->allapot = $request->allapot;

        $tevekenyseg->save();
        return response()->json($tevekenyseg,201);
       

        
    }
}
