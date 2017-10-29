<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poost;
use App\Repositories\Poosts;
use Carbon\Carbon;
use Image;



class PoostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(Poosts $posts){


       $posts= Poost::latest()->get();

      





        return view('posts.index',compact('posts','archives'));
    }

    public function show(Poost $post){

        return view('posts.show',compact('post'));
    }
    
    public function create(){
        return view('posts.create');
    }
    
    
    
    public function store(Request $request){
        

        
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',
            'ExampleImg'=>'required'
        ]);
        
       $post = new Poost;
        
        
       $post->title=request('title');
    
       $post->body=request('body');
    
       $post->user_id=auth()->id();
        
      
        
        //saving image
        
            if($request->hasFile('ExampleImg')){
                
                $image=$request->file('ExampleImg');
                
                $filename= time() . '.' . $image->getClientOriginalExtension();
                
                $location = public_path('images/'. $filename);
                    
                Image::make($image)->resize(100,100)->save($location);
                
                $post->ExampleImg = $filename;
                
               
        }
                
        
        $post->save();
        
        
        session()->flash('message','Your post now has been published');


    return redirect('/');
    }
}
