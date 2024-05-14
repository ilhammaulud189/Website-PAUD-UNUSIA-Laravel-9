<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $sponsor = Sponsor::latest()->paginate(5);//
        $sponsor = Sponsor::latest()->paginate(5);
        //dd($data);
        return view('pages.crudsponsor.sponsor',['sponsor'=>$sponsor]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.crudsponsor.sponsor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSponsorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sponsor = $request->validate([
            'judul'=>'required',
            'foto'=>'required|file|image|mimes:png,jpg,jpeg|max:2048',
            
        ]);

        $file = $request->file('foto');
        $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
        $file->storeAs('public/sponsor', $fileName);
        $sponsor['foto'] = $fileName;  

        Sponsor::create($sponsor);

        return redirect('/sponsor')->with('success','Kamu berhasil menambahkan gambar sponsor baru');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSponsorRequest  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor= Sponsor::where('id',$id)->first();
        File::delete(public_path('storage/public\sponsor').'/'.$sponsor->foto);

        Sponsor::where('id',$id)->delete();
       // $data = Post::find($id);
        //$data->delete();

        return redirect('/sponsor');
    }
}
