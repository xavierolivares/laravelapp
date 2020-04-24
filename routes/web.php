<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $name = 'Jungle';
    $tasks = [
        'Go to the store',
        'Finish my screencast',
        'Clean the house'
    ];
    return view('about', compact('tasks', 'name'));
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::post('/contact', function () {
//     return view('contact');
// });

// Route::post('/contact', function (Request $request) {
//     $data = array(
//         'name' => $request->name,
//          'mail'=>$request->mail,
//           'message'=>$request->message
//     );

//     Mail::send('contact', $data, function ($message) use($request) {
//         $message->from($request->mail,$request->name);
//         $message->to('xm.olivares@gmail.com')->subject('Alt Support');
//     });

//     return "Your email has been sent successfully";
// });

Route::get('/contact', 'ContactUSController@contactUS');

Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);