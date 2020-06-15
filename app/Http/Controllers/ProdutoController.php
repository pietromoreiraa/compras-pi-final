<?php

namespace App\Http\Controllers;

use App\Models\ModelFornecedor;
use App\Models\ModelProduto;
use App\Http\Requests\ProdutoRequest;
use App\Models\ModelSolicitacao;
use Illuminate\Support\Facades\DB;
use App\User;

class ProdutoController extends Controller
{
    private $objUser;
    private $objProduto;
    private $objFornecedor;
    private $objSolicitacao;
    public function __construct()
    {
        $this->objUser=new User();
        $this->objProduto=new ModelProduto();
        $this->objFornecedor=new ModelFornecedor();
        $this->objSolicitacao=new ModelSolicitacao();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto=$this->objProduto->all();
        return view('index',compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedor=$this->objFornecedor->all();
        return view('create',compact('fornecedor'));
    }
    public function search($id){
        $solicitacao=$this->objSolicitacao->find($id);
        $produto = DB::table('produto')->where('name','like','%'.$solicitacao->name.'%')->paginate(5);
        return view('prodCotacao',compact('produto','solicitacao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $id=auth()->user()->id;
        $cad=$this->objProduto->create([
            'name'=>$request->name,
            'price'=>$request->price,
            'id_fornecedor'=>$request->id_fornecedor,
            'id_user'=>$id
        ]);
        if($cad){
            return redirect('produtos');
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
        $produto=$this->objProduto->find($id);
       return view('show',compact('produto'));
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
    public function update(ProdutoRequest $request, $id)
    {
        //
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
