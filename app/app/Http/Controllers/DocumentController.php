<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use League\CommonMark\Node\Block\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Documents::all();

        if(!$documents){
            Log::channel('documentos')->warning('Falha na captura dos artigos');
        }
        Log::channel('documentos')->info('Todos os documentos foram buscados.');

        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentRequest $request)
    {
        $document = Documents::create($request->all());
        return redirect()->route('documentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Documents::find($id);
        return view('documents.exibedoc', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Documents::find($id);
        return view('documents.update', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $request, $id)
    {
        $document = Documents::find($id);
        
        if(!$document):
            return redirect()->back();
        endif;

        $document->update($request->all());
        return redirect()->route('documentos.index')->with('message', "Documento ID: {$id} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Documents::find($id);

        if(!$document):
            return redirect()->back();
        endif;

        $document->delete();
        return redirect()->route('documentos.index')->with('message', "Documento {$document->id} deletado com sucesso");
    }
}
