<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function __construct(Perfil $perfil){
        $this->perfil = $perfil;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //S
        $pesquisa = $request->filtro;

        $perfis=$this->perfil::where(function ($query) use($pesquisa){
            if($pesquisa){
                $query->where('nomePerfil', $pesquisa);

            }
        })->latest()->paginate();

        return view('admin.paginas.perfis.index', ['perfis'=>$perfis]);
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



        $this->perfil->create([
            'nomePerfil'=>$request->nomePerfil,
            'descricao'=>$request->descricao
        ]);

        return redirect()->route('perfis.index');
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

        $perfis=$this->perfil->find($id);


        $perfis->update([
            'nomePerfil'=>$request->nomePerfil,
            'descricao'=>$request->descricao
        ]);

        return redirect()->route('perfis.index');
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
        $perfis=$this->perfil->find($id);

        $perfis->delete();
        return redirect()->route('perfis.index');
    }
}
