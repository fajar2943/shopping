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
    }

    public function show($id)
    {
        $shopping = Shopping::find($id);
        return $shopping;
    }

    public function update(Request $request, $id)
    {
        $shopping = Shopping::find($id)->update(['nama' => $request->nama]);
    }

    public function destroy($id)
    {
        $shopping = Shopping::find($id)->delete();
    }
}
