<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {
        dd($request->all());
//            $cat = new Cat();
//            $cat->name = $request->name;
//            $cat->date_of_birth = $request->date_of_birth;
//            $cat->breed_id = $request->breed_id;
//            $cat->save();
//            redirect()->route('cats.index')->withSuccess('cat has been created');

        $cat = Cat::create($request->all());
        return redirect('cats/'.$cat->id)
            ->withSuccess('Cat has been created.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::find($id);
        return view('cats.show') ->with('cat', $cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($cat);
       // return view('cats.edit', compact('cat'));

        $cat = Cat::find($id);
        return view('cats.edit')->with('cat', $cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cat::where('id', $id)->update([
            'name' => $request->input('name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'breed_id' => $request->input('breed_id')
        ]);
        return redirect('cats/'. $id)
            ->withSuccess('Cat has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cat::where('id', $id)->delete();
        return redirect('cats')
            ->withSuccess('Cat has been deleted.');
    }
}
