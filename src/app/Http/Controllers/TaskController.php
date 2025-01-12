<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ContactFormJob;

class TaskController extends Controller
{
    public function index(Request $request) {
        return view('contact');
    }

    public function send(Request $request) {
        $data = $request->validate([
            'name' =>'required | max:100',
            'email'=>'required | email | max:200',
            'subject'=>'required | max:100',
            'message'=>'required | max:200',
        ],
        [
            'required' => 'Это поле обязательно!',
            'message.max' => 'Не более 200 символов!',
            'email.max' => 'Не более 200 символов!',
            'subject.max' => 'Не более 100 символов!',
            'name.max' => 'Не более 100 символов!',
        ]);
        ContactFormJob::dispatch($data);
        return redirect()->route('index')->with('success', 'Какие-то данные об успехе');
    }
}
