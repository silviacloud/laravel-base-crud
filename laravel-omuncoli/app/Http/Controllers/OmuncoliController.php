<?php

namespace App\Http\Controllers;

use App\Omuncolo;
use Illuminate\Http\Request;

class OmuncoliController extends Controller
{
    public function index(){

        $omuncoli = Omuncolo::all();

        return view('home', compact('omuncoli'));

    }

    public function show($id){

      $omuncolo = Omuncolo::findOrFail($id);

      return view('omuncolo_show', compact('omuncolo'));

    }

    public function edit($id){

      $omuncolo = Omuncolo::findOrFail($id);

      return view('edit_omuncolo', compact('omuncolo'));

    }

    public function update(Request $request, $id){

      // dd($request-> all());

      $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'role'=>'required',
        'phone_number' => 'required',
        'address'=>'required',
        'post_code' => 'required',
        'state'=>'required'
      ]);

      // dd($validatedData);
      $omuncolo = Omuncolo::findOrFail($id);

      $omuncolo -> name = $validatedData['firstname'];
      $omuncolo -> name = $validatedData['lastname'];
      $omuncolo -> name = $validatedData['role'];
      $omuncolo -> name = $validatedData['phone_number'];
      $omuncolo -> name = $validatedData['address'];
      $omuncolo -> name = $validatedData['post_code'];
      $omuncolo -> name = $validatedData['state'];

      $omuncolo -> save();

      return redirect()
                  -> route('omuncolo_show',$id)
                  -> withSuccess($omuncolo['name']
                                  . ' updated');
    }

    public function destroy($id){

      $omuncolo = Omuncolo::findOrFail($id);

      $omuncolo->delete();

      return redirect()
                  -> route('home')
                  -> withSuccess($omuncolo['firstname']
                                  . ' destroyed');
    }

    public function create(){

      return view('omuncoli_create');
    }

    public function store(Request $request){

      $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'role'=>'required',
        'phone_number' => 'required',
        'address'=>'required',
        'post_code' => 'required',
        'state'=>'required'
      ]);

      $omuncolo = new Omuncolo;

      $omuncolo -> name = $validatedData['firstname'];
      $omuncolo -> name = $validatedData['lastname'];
      $omuncolo -> name = $validatedData['role'];
      $omuncolo -> name = $validatedData['phone_number'];
      $omuncolo -> name = $validatedData['address'];
      $omuncolo -> name = $validatedData['post_code'];
      $omuncolo -> name = $validatedData['state'];

      $omuncolo -> save();

      return redirect()
                  -> route('home')
                  -> withSuccess($omuncolo['firstname']
                                  . ' created');
    }
}
