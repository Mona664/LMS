<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mat;

class MatController extends Controller
{
    public function add(){
        return view('Dashboard.mat.add');
    }

    public function all(){
        $mat = Mat::all();
        $title ='All Mat';
        return view('Dashboard.mat.all', compact('mat', 'title'));
    }

    public function store(Request $request){
        $mat = new Mat;
        $mat->name =$request->name;
        $mat->hours_count =$request->hours_count;
        $mat->description =$request->description;
        $mat->year =$request->year;
        $mat->faculty_id=0;
        $mat->save();

        return redirect('/mat/all');
    }

    public function delete($id){
        $mat = Mat::where('id', $id)->first();
        $mat->delete();
        return back();
    }

    public function edit($id){
        $mat = Mat::find($id);
        return view('Dashboard.mat.edit', compact('mat'));

    }

    public function update($id , Request $request){
        $mat = Mat::find($id);
        $mat->name =$request->name;
        $mat->hours_count =$request->hours_count;
        $mat->description =$request->description;
        $mat->year =$request->year;
        $mat->faculty_id=0;
        $mat->save();

        return redirect('/mat/all');
    }
}
