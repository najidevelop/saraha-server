<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MessageModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use File;
use  App\Http\Requests\Message\StoreMessageRequest;
use App\Models\Client;
 
use URL;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $id=Auth::guard('client')->user()->id;
        $List=MessageModel::where('recipient_id',$id)->get();
        $client_url=$this->getclient_url(Auth::guard('client')->user()->user_name);
        return view('site.client.mymessage',['messages'=>$List,"client_url" =>$client_url]);
    }
  public function getclient_url($slug)
    {
    
        /* Get Base URL using URL Facade */      
   $url = URL::to("/");  
   $url=$url.'/u'.'/'.$slug;
   /* Get Base URL using url() helper */
  //  $url2 = url('/');
  $href = preg_replace("(^https?://)", "", $url );
  $arr=[
   'href_client'=>$href,
   'link_client'=>$url,
  ];
      return $arr;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(StoreMessageRequest $request )
    {
        $formdata = $request->all();
        // return  $formdata;
         // return redirect()->back()->with('success_message', $formdata);
         $validator = Validator::make(
           $formdata,
           $request->rules(),
           $request->messages()
         ) ;
        
         if ($validator->fails()) {  
                                 
       //return redirect()->with('errors',$validator)->json();
        return response()->json($validator);
     
          // return redirect() 
          // ->back()
          // ->withErrors($validator,'infoform' )
          
          // ->withInput();
     
         } else {    
       
         
           $id=Auth::guard('client')->user()->id;
           Client::find($id)->update([    
    'name' => $formdata['name'],  
    'desc' => $formdata['desc'],         
    'birthdate' => $formdata['birthdate'], 
    'gender' => $formdata['gender'], 
    'country' => $formdata['country'], 
  ]); 
  if ($request->hasFile('image')) {
  
    $file = $request->file('image');
    // $filename= $file->getClientOriginalName();

    $this->storeImage($file, $id);
    //  $this->storeImage( $file,2);
  }        
         //  return redirect()->back();
            return response()->json("ok");
         }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
