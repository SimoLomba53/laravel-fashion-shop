<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoeController extends Controller
{
public function index()
{
  $shoes = Shoe::orderBy('updated_at', 'DESC' )->paginate(10);
  return view('shoes.index', compact('shoes'));
}

public function show(Shoe $shoe)
{
  return view('shoes.show', compact('shoe'));
}

public function create()
{
    return view('shoes.create');
}

public function store(Request $request)
{
    $data = $request->all();
    $shoe = new Shoe;
    $shoe->fill($data);
    $shoe->save();
    return redirect()->route('shoes.show', $shoe);
}

public function edit(Shoe $shoe)
{
  return view('shoes.edit', compact('shoe'));
}

public function update(Request $request, Shoe $shoe)
{
    $data = $request->all();
    $shoe->update($data);
    return redirect()->route('shoes.show', $shoe);
}

public function destroy(Shoe $shoe)
{
    $shoe->delete();
    return redirect()->route('shoes.index');
}

}