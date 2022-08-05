<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function() {
    // $user = new \App\Models\User();
    // $user->name = 'Testando Usuário';
    // $user->email = 'teste@teste.com';
    // $user->password = 1235678;
    // $user->save();

    // return \App\Models\User::paginate(10);
    // $loja = Store::find(1);
    
    // return $loja->products->count();

    // return User::all();
//CRIAR UMA LOJA PARA UM USUÁRIO
    // $user = User::find(10);
    // $store = $user->store()->create([
    //     'name' => 'Loja de teste',
    //     'description' => 'descricao teste',
    //     'phone' => 'XX-XXXXX-XXXX',
    //     'mobile-phone' => 'XX-XXXXX-XXXX',
    //     'slug' => 'loja-teste'
    // ]);

    //CRIAR UM PRODUTO PARA UMA LOJA
//     $store = Store::find(41);
//    $product = $store->products()->create([
//         'name' => 'Notebook Etc Muito Interessante',
//         'description' => 'Core I200 32GB',
//         'body' => 'Qualquer coisa..',
//         'price' => '7999.90',
//         'slug' => 'notebook-etc'
//     ]);

//     dd($product);

        //CRIAR CATEGORIA
//    Category::create([
//         'name' => 'Games',
//         'description' => null,
//         'slug' => 'games'
//     ]);

//     Category::create([
//         'name' => 'Videos',
//         'description' => null,
//         'slug' => 'video'
//     ]);
//     return Category::all();

    //ADICIONAR UM PRODUTO PARA UMA CATEGORIA OU VICE-VERSA
    $product = Product::find(49);

    dd($product->categories()->sync([1,2]));

});