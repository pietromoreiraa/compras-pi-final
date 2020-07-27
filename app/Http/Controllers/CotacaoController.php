<?php

namespace App\Http\Controllers;

use App\Models\ModelFornecedor;
use App\Models\ModelProduto;
use Illuminate\Http\Request;
use App\Models\ModelSolicitacao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CotacaoController extends Controller
{
    private $objSolicitacao;
    private $objProduto;
    private $objFornecedor;
    public function __construct()
    {
        $this->objSolicitacao=new ModelSolicitacao();
        $this->objProduto=new ModelProduto();
        $this->objFornecedor=new ModelFornecedor();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

        $produto = DB::table('produto')->where('name','like','%'.$solicitacao->item.'%')->paginate(5);
        if($produto->isEmpty()) {
            $produto = 'a';
            return view('cotacaoFinish', compact('solicitacao', 'produto'));
        }else{
            return view('cotacaoFinish', compact('solicitacao', 'produto'));
        }
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

        $this->objSolicitacao->where(['id'=>$id])->update([

            'id_produto'=>$request->id_produto,
            'status'=>'2'
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
