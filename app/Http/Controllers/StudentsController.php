<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/students/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required',
            'prodi' => 'required',
        ]);

    // cara 1
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->prodi = $request->prodi;

        // $student->save();

    // cara 2 (sesuaikan dengan fillable atau guarded pada model)
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'prodi' => $request->prodi
        // ]);

    // cara 3 (sesuaikan dengan fillable atau guarded pada model)
        Student::create($request->all());
        
        return redirect('/students')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        // dd($id);
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required',
            'prodi' => 'required',
        ]);

        Student::where('id', $student->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'prodi' => $request->prodi
        ]);

        return redirect('/students')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil dihapus!');
    }
}
