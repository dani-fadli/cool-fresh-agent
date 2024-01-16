<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use File;
use Illuminate\Support\Str;

class AgentController extends Controller
{
    public function editProfilAgen(string $id)
    {
        $data = Agent::findOrFail($id);
        return view('editProfilAgen', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAgent(Request $request, $id)
    {
        $request->validate([
            'owner_name' => 'required',
        ]);

        //$agent->update($request->all());

        $agent = Agent::findOrFail($id);
        $agent->owner_name = $request->input('owner_name');
        $agent->phone_number = $request->input('phone_number');
        $agent->name = $request->input('name');
        $agent->email = $request->input('email');
        $agent->address = $request->input('address');
        if ($request->hasFile('avatar_url')){
            $file = $request->file('avatar_url');
            $destinationPatch = public_path().'/assets/ProfilAgent/';
            $filename = Str::random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

            if ($agent->avatar_url) {
                $old_cover = $agent->avatar_url;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/ProfilAgent/'
                . DIRECTORY_SEPARATOR . $agent->avatar_url;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $agent->avatar_url = $filename;
        }
        $agent->save();

        return redirect('/homePage')->with('succes', 'Item updated successfully'); view('homePage');
        //return redirect()->route('author.index')->with('succes','Author Berhasil di Update');
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
    public function store(Request $request)
    {
        //
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
