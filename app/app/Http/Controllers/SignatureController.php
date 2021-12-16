<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignatureRequest;
use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signatures = Signature::all();

        if(!$signatures){
            Log::channel('assinaturas')->warning('Falha na captura das assinaturas');
        }
        Log::channel('documentos')->info('Todas as assinaturas foram capturadas.');

        return view('signature.index', compact('signatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignatureRequest $request)
    {
        $signature = Signature::create($request->all());
        return redirect()->route('assinaturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $signature = Signature::find($id);
        return view('signature.show', compact('signature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $signature = Signature::find($id);
        return view('signature.update', compact('signature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $signature = Signature::find($id);
            
        if(!$signature):
            return redirect()->back();
        endif;

        $signature->update($request->all());
        return redirect()->route('assinaturas.index')->with('message', "Assinatura ID: {$id} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
