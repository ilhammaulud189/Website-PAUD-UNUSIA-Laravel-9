<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lecturer;
use App\Models\Student;
use PhpParser\Node\Stmt\Return_;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /** public function index()

    *{   
      *  $lecturer = lecturer::latest()->paginate(5);
       * return view ('pages.lecturer.lecturer',['guru'=>$lecturer ]);
        
        
    *}*/

    
    public function index(Request $request)

    {   
        
        $key=$request->key;
        $lecturer = lecturer::latest()->where('nama','LIKE','%'.$key.'%')
        ->paginate(5);
        return view ('pages.lecturer.lecturer',['guru'=>$lecturer ]);
        
        
    }



    public function prodi(request $request)
    {
        
        return view('pages.lecturer.createprodi');
        
        
    }
   
    public function detail(request $request)
    {
        
        $key=$request->key;
        $lecturer = lecturer::latest()->where('nama','LIKE','%'.$key.'%')
        ->paginate(5);
        return view('pages.lecturer.detaillecturer',['guru'=>$lecturer ]);
        
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lecturer.lecturer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'=>'required',
            'matakuliah'=>'required',
        ]);

        lecturer::create($data);

        return redirect('/lecturer');

    }

    public function edit($id)
    {
        $data= lecturer::find($id);
        //dd($data);
        return view('pages.lecturer.editlecturer', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = lecturer::find($id);
        $data->nama=$request->nama;
        $data->matakuliah=$request->matakuliah;

        $data->save();

        return redirect('/lecturer');


    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = lecturer::find($id);
        $data->delete();

        return redirect('/lecturer');
    }


}
