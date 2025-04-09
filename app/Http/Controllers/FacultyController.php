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
        return view('Dashboard.Faculties.all');
    }
    public function store(Request $request){
    $faculty = new Faculty;
    $faculty->name =$request->name;
    $faculty->studies_year =$request->year;
    $faculty->website =$request->website;
    $faculty->website="logo";
    $faculty->hours_count =$request->hours_count;
    $faculty->description =$request->description;
    $faculty->mat_counts =$request->mat_counts;
    $faculty->location_id=0;

    $faculty->save();
    return back();
    }
}
