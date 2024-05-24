@extends('layouts.app')

@section('tittle', 'contact')

@section('body')
<div class='page-content'>
    <div class='page-tittle'>
        <h1> Entre em contato com nós</h1>
    </div>
    <div class='page-info'>
        <div class='main-contact'>
            <form action = {{ route('site.contact')}} method="POST">
                <input name="name" type="text" placeholder="Nome" class="">
                <br>
                <input name="telephone" type="text" placeholder="Telefone" class="">
                <br>
                <input name="email" type="text" placeholder="Email" class="">
                <br>
                <select name="reason" class="">
                    <option value="">Qual o motivo do contato?</option>
                    <option value="1">Duvida</option>
                    <option value="2">Elogio</option>
                    <option value="3">Reclamação</option>
                </select>
                <br>
                <textarea name="message" class=""> Preencha aqui a sua mensagem</textarea>
                <br>
                <button type="submit" class="">Enviar</button>
            </form>
                </div>
    </div>