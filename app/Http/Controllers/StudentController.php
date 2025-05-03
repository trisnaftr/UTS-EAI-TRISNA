<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\studentResource;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return new studentResource($students, 'Success', 'List of students');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //fungsinya menambahkan
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'angkatan' => 'required',
            'telepon' => 'required',
        ]);

        if ($validator->fails()) {
            return new studentResource(null, 'Gagal Menambahkan', $validator->errors());
        }

        $student = Student::create($request->all());
        return new studentResource($student, 'Berhasil', 'Data Mahasiswa telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        if ($student) {
            return new studentResource($student, 'Success', 'Data mahasiswa ditemukan');
        } else {
            return new studentResource(null, 'Failed', 'Data mahasiswa tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'angkatan' => 'required',
            'telepon' => 'required',
        ]);

        if ($validator->fails()) {
            return new studentResource(null, 'Failed', $validator->errors());
        }

        $student = Student::find($id);
        if (!$student) {
            return new studentResource(null, 'Failed', 'Data mahasiswa tidak ditemukan');
        }

        $student->update($request->all());

        return new studentResource($student, 'Success', 'Data mahasiswa ditemukan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return new studentResource(null, 'Failed', 'Data mahasiswa tidak ditemukan');
        }

        $student->delete();

        return new studentResource(null, 'Success', 'Data mahasiswa berhasil dihapus');
    }
}
