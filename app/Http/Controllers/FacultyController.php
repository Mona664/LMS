<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function add(){
        return view('Dashboard.Faculties.add');
    }

    public function all(){
        $faculties = Faculty::all();
        $title ='All Faculties';
        return view('Dashboard.Faculties.all', compact('faculties', 'title'));
    }

    public function store(Request $request){
    $faculty = new Faculty;
    $faculty->name =$request->name;
    $faculty->studies_year =$request->year;
    $faculty->website =$request->website;
    $faculty->logo="logo";
    $faculty->hours_count =$request->hours_count;
    $faculty->description =$request->description;
    $faculty->mat_counts =$request->mat_counts;
    $faculty->location_id=0;
    $faculty->save();

    return redirect('/faculties/all');
    }
    public function delete($id){
        //! 1 way
        // $faculty = Faculty::find($id);
        //2 way
        $faculty = Faculty::where('id', $id)->first();
        $faculty->delete();
        return back();

    }
    public function edit($id){
        $faculty = Faculty::find($id);
        return view('Dashboard.Faculties.edit', compact('faculty'));

    }
    public function update($id , Request $request){
        $faculty = Faculty::find($id);

        $faculty->name =$request->name;
        $faculty->studies_year =$request->year;
        $faculty->website =$request->website;
        $faculty->logo="logo";
        $faculty->hours_count =$request->hours_count;
        $faculty->description =$request->description;
        $faculty->mat_counts =$request->mat_counts;
        $faculty->location_id=0;

        $faculty->save();

        return redirect('/faculties/all');


    }
}
