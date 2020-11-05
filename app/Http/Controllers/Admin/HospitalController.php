<?php

namespace App\Http\Controllers\Admin;

use App\Hospital;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::orderBy('created_at', 'DESC')->paginate(4);
        return view('pages.admin.hospital.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.hospital.create');
    }

    public function browse()
    {
        return view('pages.admin.hospital.browse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'min:3'],
            'contact' => ['required', 'min:10'],
            'address' => ['required', 'min:5'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'photo' => ['required'],
            'photo.*' => ['mimes:jpg,jpeg,png']
        ]);

        $hospital = $request->user()->hospitals()->create($request->except('photo'));

        $hospitalPhotos = [];

        foreach ($request->file('photo') as $file) {
            $path = Storage::disk('public')->putFile('hospitals', $file);
            $hospitalPhotos[] = [
                'hospital_id' => $hospital->id,
                'path' => $path
            ];
        }

        $hospital->photos()->insert($hospitalPhotos);

        return redirect()->route('hospital.index')->with('status', 'Hospital created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // return $request->all();
        $hospital = Hospital::findOrFail($id);
        return view('pages.admin.hospital.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        if ($hospital->user_id != request()->user()->id) {
            return redirect()->back();
        }
        return view('pages.admin.hospital.edit', compact('hospital'));
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
        $hospital = Hospital::findOrFail($id);
        if ($hospital->user_id != request()->user()->id) {
            return redirect()->back();
        }
        $this->validate($request, [
            'title' => ['required', 'min:3'],
            'contact' => ['required', 'min:10'],
            'address' => ['required', 'min:5'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ]);
        $hospital->update($request->all());
        return redirect()->route('hospital.index')->with('status', 'Hospital updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = Hospital::findOrFail($id);
        if ($hospital->user_id != request()->user()->id) {
            return redirect()->back();
        }

        foreach ($hospital->photos as $photo) {
            Storage::delete('public/' . $photo->path);
        }

        $hospital->delete();
        return redirect()->route('hospital.index')->with('status', 'Hospital deleted!');
    }
}
