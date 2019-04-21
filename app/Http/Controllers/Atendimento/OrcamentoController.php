<?php

namespace App\Http\Controllers\Atendimento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Orcamento;

class OrcamentoController extends Controller
{

    public function dashboard(){
        return view('Atendimento.Orcamento.dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orcamentos = Orcamento::all();


        return view('Atendimento.Orcamento.index', ['orcamentos' => $orcamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Atendimento.Orcamento.create');
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
        $orcamento = new Orcamento();

        $orcamento->cod_funcionario = $request->input('cod_funcionario');
        $orcamento->cod_cliente = $request->input('cod_cliente');
        $orcamento->descricao = $request->input('descricao');
        $orcamento->valor = $request->input('valor');

        $orcamento->save();

        return redirect('/orcamentos');
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
        $orcamento = Orcamento::find($id);

        if(isset($orcamento)){
            return view('Atendimento.Orcamento.show', ['orcamento' => $orcamento]);
        }

        return redirect('/orcamentos');
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
        $orcamento = Orcamento::find($id);
        if(isset($orcamento)){
            return view('Atendimento.Orcamento.edit',["orcamento" => $orcamento]);
        }

        return redirect('/orcamentos');
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
        $orcamento = Orcamento::find($id);
        if(isset($orcamento)){
            $orcamento->cod_funcionario = $request->input('cod_funcionario');
            $orcamento->cod_cliente = $request->input('cod_cliente');
            $orcamento->descricao = $request->input('descricao');
            $orcamento->valor = $request->input('valor');

            $orcamento->save();
        }

        return redirect('/orcamentos');
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
        $orcamento = Orcamento::find($id);
        if(isset($orcamento)){
            $orcamento->delete();
        }

        return redirect('/orcamentos/');
    }
}
