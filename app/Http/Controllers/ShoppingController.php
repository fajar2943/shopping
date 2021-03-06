<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index()
    {
        return Shopping::all();
    }

    public function store(Request $request)
    {
        $shopping = Shopping::create(['name' => $request->name]);
        return ['created_at' => $shopping->created_at, 'id' => $shopping->id, 'name' => $shopping->name];
    }

    public function show($id)
    {
        $shopping = Shopping::find($id);
        return $shopping;
    }

    public function update(Request $request, $id)
    {
        $shopping = Shopping::find($id)->update(['name' => $request->name]);
        return 'data berhasil diupdate';
    }

    public function destroy($id)
    {
        $shopping = Shopping::find($id)->delete();
        return 'data berhasil dihapus';
    }
}
