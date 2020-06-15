<?php

namespace App\Http\Controllers;

use App\Models\ModelProduto;
use Illuminate\Http\Request;
use App\Models\ModelFornecedor;

class FornecedorController extends Controller
{
    private $objProduto;
    private $objFornecedor;
    public function __construct()
    {
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
        $fornecedor=$this->objFornecedor->all();
        return view('indexForn', compact('fornecedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Forncreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $cad=$this->objFornecedor->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'celular'=>$request->celular
        ]);
        if($cad){
            return redirect('fornecedor');
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
        $fornecedor=$this->objFornecedor->find($id);
        return view('showForn',compact('fornecedor'));
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
