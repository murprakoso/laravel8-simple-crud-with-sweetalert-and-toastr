<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => Mahasiswa::paginate(10),
            // 'mahasiswa' => Mahasiswa::all(),
        ];
        return view('mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Add Mahasiswa',
        ];
        return view('mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        try {
            $params = $request->except('_token');

            if (Mahasiswa::create($params)) {
                // Alert::success('Success', 'Successfull created');
                toastr()->info('Successfull created');
            }
            return redirect('/mahasiswa');
            //
        } catch (\Exception $e) {
            Alert::error('Oops', $e->getMessage());
            return redirect('/mahasiswa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'Detail Mahasiswa',
            'mahasiswa' => Mahasiswa::find($id)
        ];
        // dd($data);
        return view('mahasiswa.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

            $data = [
                'title' => 'Edit Mahasiswa',
                'mahasiswa' => Mahasiswa::findOrFail($id)
            ];
            return view('mahasiswa.edit', $data);
        } catch (\Throwable $e) {
            Alert::error('Oops', $e->getMessage());
            return redirect('/mahasiswa');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {
        try {
            $params = $request->except('_token');

            $mahasiswa = Mahasiswa::findOrFail($id);
            if ($mahasiswa->update($params)) {
                // Alert::success('success', 'Mahasiswa has been updated');
                toastr()->info('Mahasiswa has been updated');
            }
            return redirect('/mahasiswa');
        } catch (\Throwable $e) {
            toastr()->info('Oops, ' . $e->getMessage());
            return redirect('/mahasiswa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if (Mahasiswa::destroy($id)) {
                // Alert::success('Success', 'Successfull deleted');
                toastr()->info('Successfull deleted');
            }

            return redirect('/mahasiswa');
        } catch (\Exception $e) {
            Alert::error('Oops', $e->getMessage());
            return redirect('/mahasiswa');
        }
    }
}
