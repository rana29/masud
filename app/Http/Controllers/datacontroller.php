<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class datacontroller extends Controller
{
    
    public function registerform(){

    	return view('registerform');
    }




    public function register(request $request){


    	//return ($request);

    	//dd($request);

    	$data=array();

    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['password']=$request->pass;


    	$rules=[


    		'name'=>'required|min:4',

    		'email'=>'required|email',
    		'pass'=>'min:4'


    	];



    	$this->validate($request,$rules);


    	$image=$request->file('image');


    	//return dd($image);


    	$ran=rand(100,100000);

    	$date=date('ymdHIS');

    	$ex=$image->getClientOriginalExtension();

    	//return $ex;

    	$image_name=$ran.$date.'.'.$ex;

    	//return ($image_name);

    	$image_path='frontend/image';

    	$image_url=$image_path.$image_name;

    	$data['image']=$image_url;

    	$upload=$image->move($image_path,$image_name);

    	

    	$insert=DB::table('rana')->insert($data);

    	return redirect()->back()->with('success', 'You have done well!');

}

//----------------------------register2--------------------------------

  public function registerform2(){

    	return view('registerform2');
    }


    public function register2(request $request){


    	//return ($request);

    	//dd($request);

    	$data=array();

    	$data['class']=$request->class;
    	
    	

    

    	


    	

    	$insert=DB::table('anik')->insert($data);

    	return redirect()->back()->with('success', 'You have done well!');

}


//---------------------------data show-----------------------------------


/*public function show(){


$show=DB::table('rana')->paginate(3);

	return view('data.show',compact('show'));


}
*/


//-----------------------------------------------join table-------------------------------

public function show(){


	        $show = DB::table('rana')

            ->join('anik', 'rana.id', '=', 'anik.id')
            
            ->select('rana.*', 'anik.class')
            ->paginate(3);


            return view ('data.show',compact('show'));
}


//------------------------------------------single view-----------------------------------

public function view($id){

	$view=DB::table('rana')->where('id',$id)->first();

	return view ('data.singal',compact('view'));
}






//---------------------------------data delete---------------------------------------------


public function delete($id){

	$del=DB::table('rana')->where('id',$id)->delete();

	return redirect()->back()->with('del','<h1 class="text-danger ">Data has delete successfully</h1>');


}

//-------------------------------edit data------------------------------------------------------------


public function edit($id){

	$edit=DB::table('rana')->where('id',$id)->first();

	return view('data.edit',compact('edit'));
}


public function update(request $request,$id){


	$data=array();

	$data['name']=$request->name;
	$data['email']=$request->email;

	$update=DB::table('rana')->where('id',$id)->update($data);

	return redirect()->route('show')->with('update','<h4>Data update successfully</h4>');


}

//---------------------------auto-complete----------------------------------


public function auto(){


	return view('auto');
}







}
