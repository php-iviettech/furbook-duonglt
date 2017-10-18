<?php

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
    return "All cats";
});
//
//Route::get('/cat/{id}', function ($id) {
//    return "All cats  #${id}";
//   // return "All cats  #$id";
//})-> where ('id', '[0-9]+');

Route::get('/about', function () {
    $corp = IVietTech;
//    return view('about',['corp'=> $corp]);

  //  return view('about')->with('corp', $corp);
    return view('about', compact('corp'));
});

//    Route::get('/cats/{name}', function ($name){
//        $breed =Furbook\Breed::with('cats')
//        ->whereName($name)
//            ->first();
//        dd($breed);
//        return view('cats.index')
//            ->with('breed', $breed)
//            ->with('cats', $breed->cats);
//    });
//
//Route::get('cats/{id}', function ($id){
//    $cat =  Furbook\Cat::find($id);
//
//    return view('cats.show')->with('cat', $cat);
//});


Route::resource('cats', 'CatController');

//edit
//Route::get('cats/{cat}/edit', function (Furbook\Cat $cat) {
   // return view('cats.edit')->with('cat', $cat);
//});

//show
//Route::get('cats/{id}', function ($id) {
//    $cat = Furbook\Cat::find($id);
//    return view('cats.show')->with('cat', $cat);
//});

// or Route-model binding
//Route::get('cats/{cat}', function(Furbook\Cat $cat) {
//   return view('cats.show')->with('cat', $cat);
//});

//destroy
//Route::delete('cats/{cat}', function (Furbook\Cat $cat) {
//    $cat->delete();
//    return redirect('cats')
//        ->withSuccess('Cat has been deleted.');
//});

//update
//Route::put('cats/{cat}', function (Furbook\Cat $cat) {
//    $cat->update(Input::all());
//    return redirect('cats/' . $cat->id)
//        ->withSuccess('Cat has been updated.');
//});


