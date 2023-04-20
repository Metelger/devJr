<?php

namespace App\Http\Controllers;
use App\Models\GitUserModel;
use Exception;
use Illuminate\Http\Request;

class GitUserController extends Controller
{
    //
    public function getUser()
    {

        // Dados para serem retornados na consulta
        $user = GitUserModel::get([
            'name',
            'email',
        ]);

        // Retorno da resposta
        try {
            return response()->json([
                'message' => 'Consulta realizada com sucesso',
                'user' => $user
            ], 200);
        }
        catch(Exception $e) {
            return response()->json([
                'message' => 'Erro ao consultar o usuários'
            ], 500);
        }
    }
}
