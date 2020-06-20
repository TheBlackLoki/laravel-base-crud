<?php

namespace App\Http\Controllers;
use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{
  public function index(){
    $omini = Omino::all();

    return view('home',compact('omini'));
  }
  public function show($id)
  {
    $omino = Omino::findOrFail($id);
    return view('show',compact('omino'));
  }
  public function destroy($id)
  {
    $omino = Omino::findOrFail($id);
    $omino -> delete();
    return redirect() -> route('home');
  }
  public function create()
  {
    return view('create_omino');
  }
  public function store(Request $request)
  {
    $data = $request -> all();
    $omino = new Omino;
    $omino -> firstname = $data['firstname'];
    $omino -> lastname = $data['lastname'];
    $omino -> address = $data['address'];
    $omino -> code = $data['code'];
    $omino -> state = $data['state'];
    $omino -> phonenumber = $data['phonenumber'];
    $omino -> role = $data['role'];
    $omino -> save();
    return redirect() -> route('home');
  }
  public function edit($id)
  {
    $omino = Omino::findOrFail($id);
    return view('edit_omino',compact('omino'));
  }
  public function update(Request $request, $id)
  {
    $data =$request -> all();
    
    $omino = Omino::findOrFail($id);

    $omino -> firstname = $data['firstname'];
    $omino -> lastname = $data['lastname'];
    $omino -> address = $data['address'];
    $omino -> code = $data['code'];
    $omino -> state = $data['state'];
    $omino -> phonenumber = $data['phonenumber'];
    $omino -> role = $data['role'];

    $omino -> save();

    return redirect() -> route('home');

  }
}
