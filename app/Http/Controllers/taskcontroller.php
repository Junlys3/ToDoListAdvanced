<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\taskmodel;
use App\Models\User;

class taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userauthid = Auth::id();

        $userfind = User::find($userauthid);



       // Pega todas as tarefas do usuário(Comparando o campo user_id com o id do user )
        $usertasks = taskmodel::where('user_id', $userauthid)->get();



        return view('tasks.index', compact('userfind', 'usertasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
        ]);

        taskmodel::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarefa criada com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $taskid = taskmodel::find($id);
        $taskid->delete();
        return redirect()->route('tasks.index')->with('success', 'Tarefa deletada com sucesso!');
    }
}
