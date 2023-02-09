<?php

namespace App\Http\Controllers;

use App\Models\Detalhe;
use App\Models\Plano;
use Illuminate\Http\Request;

class DetalheController extends Controller
{
    //

    public function __construct(Detalhe $detalhe, Plano $plano){

        $this->plano=$plano;
        $this->detalhe = $detalhe;
    }

    public function index($idPlano){

        if(!$planos=$this->plano->find($idPlano)){
            return redirect()->back();
        }

        return view('admin.paginas.detalhes.index',['detalhes'=>$planos->detalhe()->latest()->paginate(),'planos'=>$planos]);
    }

    public function store(Request $request, $idPlano){
        if(!$planos=$this->plano->find($idPlano)){
            return redirect()->route('detalhes.index')->with('success', 'Detalhe registrado com sucesso');
        }
        $planos->detalhe()->create([
            'nomeDetalhe' => $request->nomeDetalhe,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('detalhes.index',$idPlano);
    }

    public function update(Request $request, $idPlano, $id){

        $planos = $this->plano->find($idPlano);
        $detalhe = $this->detalhe->find($id);



        if(!$planos || !$detalhe){
            return redirect()->back();
        }else{

            $detalhe->update([
                'nomeDetalhe'=>$request->nomeDetalhe,
                'descricao'=>$request->descricao
            ]);
            return redirect()->route('detalhes.index', $idPlano);
        }
    }


    public function destroy($idPlano, $id){
        $planos = $this->plano->find($idPlano);
        $detalhes = $this->detalhe->find($id);

        if(!$planos || !$detalhes){

            return redirect()->back();
        }

        $detalhes->delete();

        return redirect()->route('detalhes.index', $idPlano);

    }
}
