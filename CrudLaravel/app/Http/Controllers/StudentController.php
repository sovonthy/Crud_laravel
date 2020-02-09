<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    //
     // public function showStudent(){
    //     $students = array('Preab','Sovath','Reach','Rith','kanah');
    //     return view('student',compact('students'));
    // }
    // public function searchStudent($name){
    //     $students = array('Preab','Sovath','Reach','Rith','kanah');
    //     $isNameFound = false;
    //     //loop to compare name with all students
    //     foreach ($this->students as $student) {
    //     if($student==$name){
    //     $isNameFound = true;
    //     break;
    //     }
    //     } 
    //     //check is name found we will return found message
    //     $result = $name." Not Found...";
    //     if($isNameFound){
    //     $result = $name." is in the list..";
    //     }
    //     return $result;
    //     }
    public function getStudent(){
        // $students =DB::table('student')->get();
        $students = Student::all();
        // $students = Student::find(8);
        return view('studentData.student',compact('students'));
        // dd($students);
    }
    // public function saveStudent(Request $request){
    //     $request->validate([
    //         'firstname' => 'required',
    //         'lastname' => 'required',
    //     ]); 
    // }
    public function insertStudent(Request $request){
        $addStudent = new Student;
        $addStudent-> Firstname = $request -> get('firstname');
        $addStudent-> Lastname = $request -> get('lastname');
        $addStudent-> Age = $request -> get('age');
        $addStudent-> save();
        return redirect ('student');

    }
    public function showForm(){
        return view('studentData.addStudent');
    }
    public function showEdit($id){
        // dd($id);
        $student = Student::find($id);
        return view('studentData.editStudent',compact('student'));
    }
    public function updateStudent($id,Request $request){
        $student = Student::find($id);
        $student -> Firstname = $request-> firstname;
        $student -> Lastname = $request-> lastname;
        $student -> Age = $request-> age;
        $student->save();
        return redirect('student');
    }
    public function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('student');
    }
}
