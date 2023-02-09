<?php

namespace App\Http\Controllers;

use App\Models\Permissao;
use Illuminate\Http\Request;

class PermissaoController extends Controller
{

    public function __construct(Permissao $permissao){

        $this->permissao = $permissao;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $pesquisa = $request->filtro;

        $permissoes = $this->permissao::where(function ($query) use ($pesquisa) {
            if($pesquisa){
                $query->where('nomePermissao', $pesquisa);

            }
        })->latest()->paginate();

        return view('admin.paginas.permissao.index', ['permissoes' => $permissoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        $this->permissao->create([
            'nomePermissao'=>$request->nomePermissao,
            'descricao'=>$request->descricao
        ]);

        return redirect()->route('permissoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $permissoes = $this->permissao->find($id);

        $permissoes->update([
            'nomePermissao'=>$request->nomePermissao,
            'descricao'=>$request->descricao
        ]);

        return redirect()->route('permissoes.index');
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
        $permissoes = $this->permissao->find($id);

        $permissoes->delete();
        return redirect()->route('permissoes.destroy');
    }
}
