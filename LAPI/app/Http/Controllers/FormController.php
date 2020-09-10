<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Resources\FormResource as FormResource;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return FormResource::collection(Form::all()->sortBy('id'));
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
    public function store(Request $request)
    {
      $user = new Form;
      $user->name = $request->input('user');
      $user->save();
      return FormResource::collection(Form::all()->sortBy('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      Log::info("Update Function Successful");

      $user = Form::find($id);
      $user->name = $request->input('user');
      $user->save();
      // $returnedData = FormResource::collection(Form::all())->sortBy('id');

      // $check = serialize($returnedData);
      // Log::info($check);

      return FormResource::collection(Form::all()->sortBy('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = Form::find($id);
      $user->delete();
      return FormResource::collection(Form::all()->sortBy('id'));
    }
}
