<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restorent;
use Session;
use App\Models\user;
use Crypt;
use Illuminate\Contract\EncryptionDecryptException;

class restocontroller extends Controller
{
    //
    function index(){
       // $data=['id'=>'akshay'];
        return view('home');
    }
    function list(){
       $data=restorent::all();
       
      return view('list',['data'=>$data]);
    }
    function add(Request $req){
        $res =new restorent;
        $res->name = $req->name;
        $res->email = $req->email;
        
        $res->address = $req->address;
        $res->save();
        $req->session()->flash('status','Restorent entered succesfully');
         return redirect('list');
    }
        
    function delete($id){
        $data= restorent::find($id);
        $data->delete();
        Session::flash('status',"restorent deleted succesfully");
        return redirect('list');
            
        }
        function edit($id){
            $data= restorent::find($id);
            return view('edit',['data'=>$data]);

        }
        function update(Request $req){
            $resto = restorent::find($req->id);
            $resto->name= $req->name;
            $resto->email= $req->email;
            $resto->address= $req->address;
            $resto->save();
           Session::flash('status','restorent updated');
            return redirect('list');



        }
        function register(Request $req){
            $data = new user;
            $data->name = $req->name;
            $data->email = $req->email;
            $data->password =Crypt::encrypt($req->password);
            $data->phone = $req->phone;
            $data->save();
            Session::flash('status','new user add');
            return redirect('register');
        }
        function login(Request $req){
            $data= user::where('email',$req->email)->get();
            if(Crypt::decrypt($data[0]->password) == $req->password)
            {
                Session::flash('status',$data[0]->name);
               return  redirect('/');
            }

            
        }

    
}
