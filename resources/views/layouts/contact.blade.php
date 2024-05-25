@extends('layouts.app')

@section('tittle', 'contact')

@section('body')
<div class='page-content'>
    <div class='page-tittle'>
        <h1> Entre em contato com nós</h1>
    </div>
    <div class='page-info'>
        <div class='main-contact'>
                @component('components.contactform')
                @endcomponent
                </div>
    </div>
</div>

    @include('layouts.nav')
@endsection