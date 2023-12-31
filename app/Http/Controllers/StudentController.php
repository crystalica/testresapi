<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\HTTP\Request;

class StudentController extends Controller

{
    public function index() {
        $students = Student::all();
        return response()->json($students);

    }
    public function show($id) {
        $students = Student::find($id);
        return response()->json($students);

    }

    public function store(Request $request) {
        $student = new Student();
        $student->nim = $request->nim;
        $student->nama_lengkap = $request->nama_lengkap;
        $student->program_studi = $request->program_studi;
        $student->alamat = $request->alamat;
        $student->save();
        return response()->json("Data Berhasil di input!");
    }
    public function update(Request $request, $id) {
        $student = Student::find($id);

        $student->nim = $request->nim;
        $student->nama_lengkap = $request->nama_lengkap;
        $student->program_studi = $request->program_studi;
        $student->alamat = $request->alamat;
        $student->save();
        return response()->json("Data Berhasil di update!");
    }
    public function delete($id) {
        $student = Student::find($id);
        $student->delete();
        return response()->json("Data Berhasil di hapus!");

    }
}