<?php

namespace App\Http\Controllers;

// use App\Models\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function index() {
        return view('regional.index');
    }
}

//public function index()
//     {
//         $regionals = Regional::all();
//         return response()->json($regionals);
//     }
// 
//     public function create()
//     {
//         // Tidak perlu view, langsung return response JSON
//         return response()->json(['message' => 'Create Regional']);
//     }
// 
//     public function store(Request $request)
//     {
//         $regional = Regional::create($request->all());
//         return response()->json($regional, 201);
//     }
// 
//     public function show(Regional $regional)
//     {
//         return response()->json($regional);
//     }
// 
//     public function edit(Regional $regional)
//     {
//         // Tidak perlu view, langsung return data regional
//         return response()->json($regional);
//     }
//     public function update(Request $request, Regional $regional)
//     {
//         $regional->update($request->all());
//         return response()->json($regional);
//     }
// 
//     public function destroy(Regional $regional)
//     {
//         $regional->delete();
//         return response()->json(['message' => 'Regional deleted']);
//     }