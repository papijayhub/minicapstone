<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graduate;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
    {
         $this->middleware('permission:graduate-list|graduate-create|graduate-edit|graduate-delete', ['only' => ['index','show']]);
         $this->middleware('permission:graduate-create', ['only' => ['create','store']]);
         $this->middleware('permission:graduate-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:graduate-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $graduates = Graduate::latest()->paginate(8);
        return view('graduates.index',compact('graduates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            // ->with('graduates', $graduates);
    }
     //
    public function search(Request $request){
        $search = $request->input('search');
  
        $graduates = Graduate::where('name', 'like', "$search%")
           ->orWhere('qoute', 'like', "$search%")
           ->get();
  
        return view('result')->with('graduates', $graduates);
    }
  
    public function viewmember($id){
  
        $graduate = Graduate::find($id);
  
        return view('graduates.index')->with('graduate', $graduate);
    }
      
    public function find(Request $request){
        $search = $request->input('search');
  
        $graduates = Graduate::where('name', 'like', "$search%")
           ->orWhere('qoute', 'like', "$search%")
           ->get();
  
        return view('graduates.searchresult')->with('graduates', $graduates);
    }
    // 
    public function create()
    {
        return view('graduates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        Graduate::create($requestData);
        return redirect()->route('graduates.index')
                                    ->with('success','New graduate created successfully.');




        // request()->validate([
        //     'name' => 'required',
        //     'qoute' => 'required',
        //     'advice' => 'required',
        //     'photo' => 'required',
        // ]);
    
        // Graduate::create($request->all());
    
        // return redirect()->route('graduates.index')
        //                 ->with('success','New graduate created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Graduate $graduate)
    {
        return view('graduates.show',compact('graduate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduate $graduate)
    {
        return view('graduates.edit',compact('graduate'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graduate $graduate)
    {
        request()->validate([
            'name' => 'required',
            'qoute' => 'required',
            'advice' => 'required',
            // 'photo' => 'required'
        ]);
        //ge
        // $graduate = $request->all();
        // $fileName = time().$request->file('photo')->getClientOriginalName('graduate');
        // $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        // $graduate["photo"] = '/storage/'.$path;
        // Graduate::create($graduate);
        //ge
    
        $graduate->update($request->all());
    
        return redirect()->route('graduates.index')
                        ->with('success','Graduates updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduate $graduate)
    {
        $graduate->delete();
    
        return redirect()->route('graduates.index')
                        ->with('success','Graduate deleted successfully');
    }
}
