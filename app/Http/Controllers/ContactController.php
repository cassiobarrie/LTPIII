<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function show(){
        $contacts = contact::get();

        return view('admin.posts.show', compact('contacts'));
    }

    public function contacto(){
        return view('admin.posts.contacto');
    }

    public function addcontact(StoreUpdatePost $request){
        $contacts = contact::create($request->all());
        return redirect()->route('posts.contacto');;
    }

    public function destroy($id){
        $contacts = contact::find($id);
        $contacts->delete();
        return redirect()->route('posts.show');
     }

     public function edita($id){
        $contacts = contact::find($id);
        if(!$contacts){
            return redirect()->route('posts.show');
        }
        return view('admin.posts.edita', compact('contacts'));
     }

     public function update(StoreUpdatePost $request, $id){
        $contacts = contact::find($id);
        if(!$contacts){
            return redirect()->back();
        }
        $contacts->update($request->all());
        return redirect()
        ->route('posts.show')
        ->with('message', 'Alterado com sucesso');


      }

}
