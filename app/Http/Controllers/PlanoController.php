<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanoRequest;
use App\Models\Plano;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlanoController extends Controller
{


    public function __construct(Plano $planos){
        $this->plano = $planos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.paginas.planos.index', ['planos'=>$this->plano->latest()->paginate(10)]);
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
    public function store(PlanoRequest $request)
    {
        //

        $this->plano->create([
            'nomePlano'=>$request->nomePlano,
            'url' =>Str::kebab($request->nomePlano),
            'preco'=>$request->preco,
            'descricao'=>$request->descricao
        ]);

        return redirect()->route('planos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function update(PlanoRequest $request, $id)
    {
        //
        $this->plano->findOrFail($id);

        $this->plano->update([
            'nomePlano' => $request->nomePlano,
            'url' => Str::kebab($request->nomePlano),
            'preco' => $request->preco,
            'descricao' => $request->descricao
        ]);

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
        $planos=$this->plano->findOrFail($id);
        if($planos->detalhe()->count()>0){
            dd("tens detalhes por eliminar");
        }else{
            $this->plano->delete();
        }

    }

    public function filtro(Request $request){
        $filtros = $request->except('_token');
        $planos = $this->plano->pesquisa($request->filtro);
        return view('admin.paginas.planos.index', ['planos'=>$planos, 'filtros'=>$filtros]);
    }
}
