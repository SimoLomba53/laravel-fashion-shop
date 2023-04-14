<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoeController extends Controller
{
public function index()
{
  $shoes = Shoe::paginate(8);
  return view('shoes.index', compact('shoes'));
}

public function show(Shoe $shoe)
{
  return view('shoes.show', compact('shoe'));
}


}