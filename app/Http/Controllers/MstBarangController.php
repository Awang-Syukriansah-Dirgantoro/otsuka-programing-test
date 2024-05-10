<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storemst_barangRequest;
use App\Http\Requests\Updatemst_barangRequest;
use App\Models\mst_barang;
use App\Models\mst_category_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MstBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::guard('user')->user()->role);
        $role = Auth::guard('user')->user()->role;
        $category = mst_category_barang::get()->all();
        $barang = mst_barang::get()->all();
        return view('product')->with('category', $category)->with('barang', $barang)->with('role', $role);
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
        $imagepath = "";
        $filename = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $filename);
        $imagepath = $imagepath . $filename . " ";
        // dd($imagepath);
        mst_barang::create([
            'nama' => $request->nama,
            'id_category' => $request->category,
            'image' => $imagepath,
            'status' => 'Wait For Approval',
        ]);

        return redirect()->back();
    }

    public function approval(Request $request, $id, $status)
    {
        // dd($status);
        if($status == "approve"){
            mst_barang::find($id)->update(['status'=>"Approve"]);
        } else {
            mst_barang::find($id)->update(['status'=>"Rejected"]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(mst_barang $mst_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mst_barang $mst_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemst_barangRequest $request, mst_barang $mst_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mst_barang $mst_barang)
    {
        //
    }
}
