<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employee::paginate(10);
        return view("dashboard", ["employes" => $employes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(),[
            'name' => 'required',
            'nib' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'kelas' => 'required',
            'rumpun' => 'required',
            'jenis' => 'required'
        ])->validate();
        $employee = new Employee;
        
        $employee->name = $request->get('name');
        $employee->nib = $request->get('nib');
        $employee->position = $request->get('jabatan');
        $employee->division = $request->get('divisi');
        $employee->class = $request->get('kelas');
        $employee->clan = $request->get('rumpun');
        $employee->type = $request->get('jenis');

        $employee->save();
        return redirect()->route('employes.create')->with('status','Data Pegawai Berhasi Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employes.index')->with('status', 'Data Pegawai Berhasi Dihapus');
    }
}
