<?php

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email', // Validasi email harus unik dalam tabel students
    ]);

    // Simpan data mahasiswa ke dalam database
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    // Redirect kembali ke halaman indeks mahasiswa dengan pesan sukses
    return redirect()->route('students.index')
        ->with('success', 'Student created successfully.');
}
