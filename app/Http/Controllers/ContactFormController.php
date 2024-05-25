<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
     public function show(){ 
    var_dump($_POST); 
    return view('contact'); } 
}
