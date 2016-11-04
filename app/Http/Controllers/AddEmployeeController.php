<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Employee;
use DB;
use Input;





class AddEmployeeController extends Controller
{
    //

     public function index()
    {
        return view('adminlte::addEmployee');
    }


    public function store(Request $request)
    {
    	$imageTempName = $request->file('file')->getPathname();
        $imageName = $request->file('file')->getClientOriginalName();
        
       

        if(Input::hasFile('file'))
        {
                
                $file = Input::file('file');
                $file->move('img/empimages',$file->getClientOriginalName());
                
                
        }
        

// this is for 2nd fikle
      /* 
        if(Input::hasFile('attachment_url'))
        {
                
                $file1 = Input::file('attachment_url');
                $file1->move('img/empimages',$file1->getClientOriginalName());
                
                
        }
        $path2 = Input::file('attachment_url')->getRealPath();
        
		*/


        $this->validate($request, array(
                'first_name'=>'required|max:255',
                'last_name'=>'required',
                'nic'=>'required',
                'email'=>'required'
        ));    

        
        

        //store
     	$emp =new Employee;

        $emp->id= $request->id;
        $emp->first_name= $request->first_name;
        $emp->nic=$request->nic;
        $emp->last_name= $request->last_name;
        $emp->imgurl=$request->file;
        $emp->email= $request->email;
        

        $emp->save();
       
        //redirect

     //   return redirect()->routes('posts.show',$post->id);

        DB::table('employees')
            ->where('imgurl', $imageTempName)
            ->update(['imgurl' => $imageName]);
       //  DB::table('posts')
         //   ->where('carousel_url', $imageTempName1)
           // ->update(['carousel_url' => $imageName1]);
           
      

        return view('adminlte::home');



    }





}
