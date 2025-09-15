<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class logincontroller extends Controller
{

   public function register(Request $request)
   { /*registra o user*/
      $dados = $request->validate([ /*valida os dados recebidos com as regras estabelecidas*/
           'name' => 'required|max: 100',
           'email'=> 'required',
           'password'=> 'required |min: 6 ',         
             
        ]);

     

      $user = User::create([ /*Cria um objeto user com os dados recebidos*/
        'name' => $dados['name'],
        'email' => $dados['email'],
        'password' => bcrypt($dados['password']),
       ]);


      Auth::login($user); /*faz login com o objeto user*/
      $request->session()->regenerate();
      return redirect()->route('tasks.index');

   }


   public function login(Request $request){
   { /*faz login com o user*/
      $dados = $request->validate([ /*valida os dados recebidos com as regras estabelecidas*/
           'email'=> 'required',
           'password' => 'required |min: 6 ',         
             
        ]);
        

      if(Auth::attempt($dados))
        { /*faz login com o objeto user*/
            $request->session()->regenerate();
            return redirect()->route('tasks.index');
      }else{
         return redirect()->route('register');
      }
  
   }



    }
}
