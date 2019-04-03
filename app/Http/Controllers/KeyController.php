<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeyGenerateRequest;
use App\Models\Gate;
use App\Models\Senha;
use Illuminate\Support\Facades\Input;

class KeyController extends Controller
{
    public function index()
    {
        if (Input::has('reset_password')) {
            Senha::truncate();
        }

        return view('key');
    }

    public function generate(KeyGenerateRequest $req)
    {
        $incomingGate = $req->getGate();
        $lastGeneratedPassword = Senha::select('chave')->orderBy('created_at', 'desc')->first();
        $incomingGate['senha'] = $lastGeneratedPassword['chave'] + 1;
        Senha::create([
            'chave' => $incomingGate['senha'],
        ]);
        $createdGate = Gate::create($incomingGate);
        return view('generatedKey', [
            'gate' => $createdGate
        ]);
    }
}
