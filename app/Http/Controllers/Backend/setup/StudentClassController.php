<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\StudentClass;

class StudentClassController extends Controller
{
    public function ViewStudent()
    {
        $data['allData'] = StudentClass::all();
        return view('backend.setup.student.student_class.view_class', $data);
    }
    public function StudentClassAdd()
    {
        return view('backend.setup.student.student_class.add_class');
    }
    public function StudentClassStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:student_classes,name',

        ]);
        $data = new StudentClass();
        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Student Classs Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('student.class.view')->with($notification);
    }
    public function StudentClassEdit($id)
    {
        $editData = StudentClass::find($id);
        return view('backend.setup.student.student_class.edit_class', compact('editData'));
    }
}