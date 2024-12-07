<?php

namespace App\Http\Controllers\backend\lawyers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index(){
        $data['lawyers'] = Lawyer::all();
        return view('backend.lawyer.index', $data);
    }
    public function create(){
        $data['departments'] = Department::where('status', 1)->get();
        return view('backend.lawyer.create', $data);
    }
    public function store(Request $request){
        $lawyer = new Lawyer();
        $lawyer->department_id = $request->department_id;
        $lawyer->name = $request->name;
        $lawyer->phone = $request->phone;
        $lawyer->address = $request->address;
        $lawyer->years_of_experience = $request->years_of_experience;
        $lawyer->status = 1;
        $lawyer->save();
        return redirect()->route('backend.manage-lawyers')->with('message', 'Lawyer create successfully, Thank you');
    }
    public function edit($id){
        $data['lawyer'] = Lawyer::find($id);
        $data['departments'] = Department::where('status', 1)->get();
        return view('backend.lawyer.update', $data);
    }
    public function update(Request $request, $id){
        $lawyer = Lawyer::find($id);
        $lawyer->department_id = $request->department_id;
        $lawyer->name = $request->name;
        $lawyer->phone = $request->phone;
        $lawyer->address = $request->address;
        $lawyer->years_of_experience = $request->years_of_experience;
        $lawyer->status = $request->status;
        $lawyer->update();
        return redirect()->route('backend.manage-lawyers')->with('message', 'Lawyer create successfully, Thank you');
    }
    public function delete($id){
        $lawyer = Lawyer::find($id);
        $lawyer->delete();
        return redirect()->route('backend.manage-lawyers')->with('message', 'Lawyer info delete successfully, Thank you');
    }
}
