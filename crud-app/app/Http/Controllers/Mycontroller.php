<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class Mycontroller extends Controller
{
    //

    public function insert(Request $req){

        $name = $req->get('pname');
        $price = $req->get('ppice');
        $pimage = $req->file('pimage')->getClientOriginalName();
        //move uploaded file
        $req->pimage->move(public_path('images'), $pimage);
        
        $prod = new product();
        $prod->Pname = $name;
        $prod->Pprice = $price;
        $prod->Pimage = $pimage;
        $prod->save();

        return redirect('/');
    }

    public function redData(){
        $viewdata = product::all();
        return view('insertRead', ['viewData' => $viewdata]);
    }

    public function updateDelete(Request $req){
        $id = $req->get('id');
        $pname = $req->get('pname');
        $ppice = $req->get('ppice');
        // $pimage = $req->file('pimage')->getClientOriginalName();
        // //move uploaded file
        // $req->pimage->move(public_path('images'), $pimage);

        if($req->get('update') == 'Update'){
            return view('updateview', ['id' => $id,'pname' => $pname,'ppice' => $ppice]);
        }else{
          $prod = product::find($id);
          $prod->delete();
        }
        return redirect('/');
    }

    public function updatedata(Request $req){
        $id = $req->get('pid');
        $name = $req->get('pname');
        $price = $req->get('ppice');
        // if($req->get('pimage')){
        //     $pimage = $req->file('pimage')->getClientOriginalName();
        //     //move uploaded file
        //     $req->pimage->move(public_path('images'), $pimage);    
        // }
        
        $prod = product::find($id);
        $prod->Pname = $name;
        $prod->Pprice = $price;
        // $prod->Pimage = $pimage;
        $prod->save();

        return redirect('/');
    }


}
