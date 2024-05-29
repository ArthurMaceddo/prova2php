<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function showForm()
    {
        return view('contactform');
    }

    /**
     * Process the submitted contact form.
     */
    public function submitForm(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'telephone' => 'required|max:20', // Ajuste o tamanho conforme necessário
            'reason' => 'required',
            'message' => 'required',
        ]);

        // Salva os dados do contato no banco de dados
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->reason = $request->reason;
        $contact->message = $request->message;
        $contact->save();

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
