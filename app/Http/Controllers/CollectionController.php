<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

// 6706223162 - Rafa Suryaputra

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        return view('koleksi.daftarKoleksi', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'namaKoleksi' => 'required|string|max:255',
            'jenisKoleksi' => 'required|string|max:255',
            'jumlahKoleksi' => 'required|integer',
        ]);

        // Simpan data koleksi ke dalam database
        $collection = new Collection();
        $collection->namaKoleksi = $validatedData['namaKoleksi'];
        $collection->jenisKoleksi = $validatedData['jenisKoleksi'];
        $collection->jumlahKoleksi = $validatedData['jumlahKoleksi'];
        $collection->save();

        // Redirect kembali ke halaman sebelumnya atau ke halaman lain yang Anda inginkan
        return redirect()->route('koleksi')->with('success', 'Data koleksi telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mengambil koleksi berdasarkan ID yang diberikan
        $collection = Collection::find($id);
    
   
        return view('koleksi.infoKoleksi', compact('collection'));
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
    public function destroy(Collection $collection)
    {
        try {
            // Hapus koleksi berdasarkan ID
            $collection->delete();

            return redirect()->route('koleksi')->with('success', 'Koleksi berhasil dihapus.');
        } catch (\Exception $e) {
            // Tangani jika terjadi kesalahan
            return redirect()->route('koleksi')->with('error', 'Gagal menghapus koleksi.');
        }
    }
}
