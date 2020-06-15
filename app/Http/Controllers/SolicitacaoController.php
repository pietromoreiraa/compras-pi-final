<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSolicitacao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SolicitacaoController extends Controller
{
    private $objSolicitacao;
    public function __construct()
    {
        $this->objSolicitacao=new ModelSolicitacao();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitacao=$this->objSolicitacao->all();
        return view('Solindex',compact('solicitacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Solcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objSolicitacao->create([
            'item'=>$request->item,
            'tipo'=>$request->tipo,
            'descricao'=>$request->descricao,
            'qtdUni'=>$request->qtdUni,
            'unidade'=>$request->unidade,
            'tipoUni'=>$request->tipoUni
        ]);

        if($cad){


            if(auth::user()!=null) {
                return redirect('solicitacao');
            }
            else{
                return view('triage');
            }
        }
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
        $solicitacao=$this->objSolicitacao->find($id);
        return view('cotacao',compact('solicitacao'));

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
        $ldate=Carbon::now();
        $this->objSolicitacao->where(['id'=>$id])->update([
            'dataAbertura'=>$ldate->toDateTimeString(),
            'dataFinal'=>$request->dataFinal,
            'status'=>'1'
        ]);
        return redirect('solicitacao');
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
