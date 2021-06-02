<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        return view('upload')->with('dataset',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Data $data)
    {
        $this->validate($request,[
           'name' => 'nullable',
           'email' => 'nullable',
           'phone' => 'nullable',
           'gender' => 'nullable',
           'status' => 'nullable',
           'image' => 'nullable',
        ]);
        if(empty($request->post('image')) && empty($request->post('name'))
            && empty($request->post('email')) && empty($request->post('phone'))
            && empty($request->post('gender')) && empty($request->post('status'))){

            return redirect('/');
        }
        else{

            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $image_name=$request->post('image');
                $image->storeAs('/public/media',$image_name);
            }

            Data::create($request->all());
            return redirect('/success');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Data::find($id);
        return view('update')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $model= Data::find($id);
        $model->name = $request->post('name');
        $model->email = $request->post('email');
        $model->phone = $request->post('phone');
        $model->gender = $request->post('gender');
        $model->status = $request->post('status');
        $model->image = $request->post('image');
        $model->save();
        $request->session()->flash('message','Data Updated');
        return redirect('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        $model= Data::find($id);
        $model->delete();
        $request->session()->flash('message','Data Deleted');
        return redirect('/success');
    }
}

