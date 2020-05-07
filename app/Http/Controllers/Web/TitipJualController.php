<?php

namespace App\Http\Controllers\Web;

use Auth;
use Mail;
use Redirect;
use App\Merk;
use App\User;
use App\Subkategori;
use App\Kategori;
use App\TahunProduksi;
use App\Models\Transmisi;
use App\Models\TitipJual;
use App\Models\DetailTitipJual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TitipJualController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getFormTitipJual(){
    	$subKategoris 		= Subkategori::all();
    	$kategoris 			= Kategori::all();
    	return view('web.titip_jual.create',[
    		'subKategoris' 		=> $subKategoris,
    		'kategoris' 		=> $kategoris
    	]);
    }

    public function store(Request $request){
        $user_id                        = Auth::user()->id;
        $titip_jual                     = new TitipJual;
        $titip_jual->subkategori_id     = $request->subkategori_id;
        $titip_jual->transmisi_id       = $request->transmisi_id;
        $titip_jual->lokasi             = $request->lokasi;
        $titip_jual->nomor_telpn        = $request->nomor_telpn;
        $titip_jual->user_id            = $user_id;
        $titip_jual->save();
        return redirect()->route('apoitment.member', $titip_jual->id)->withSuccess('Data Berhasil Dikirim');
    }

    public function appoitment($id){
        $titip_jual         = TitipJual::findOrFail($id);
        $kategoris          = Kategori::all();
        return view('web.titip_jual.jadwal_inspeksi',[
            'titip_jual'    => $titip_jual,
            'kategoris'     => $kategoris
        ]);
    }

    public function apoitmentStore(Request $request){
        $user_id                            = Auth::user()->id;
        $apoitment                          = new DetailTitipJual;
        $apoitment->jam_pertemuan           = $request->jam_pertemuan;
        $apoitment->nama_lengkap            = $request->nama_lengkap;
        $apoitment->email                   = $request->email;
        $apoitment->alamat_lengkap          = $request->alamat_lengkap;
        $apoitment->pemilik_kendaraan       = $request->pemilik_kendaraan;
        $apoitment->iklan                   = $request->iklan;
        $apoitment->titip_id                = $request->titip_id;
        $apoitment->user_id                 = $user_id;
        $apoitment->save();
        //process email
        /*$dataOrder                          = [
            'name'                          => $apoitment->user->name,
            'email'                         => $apoitment->user->email,
            'nama_lengkap'                  => $apoitment->nama_lengkap,
            'jam_pertemuan'                 => $apoitment->jam_pertemuan
        ];
        $mailOrder = (new EmailController)->invoiceEmail($dataOrder); */
        return redirect()->route('home.index');
    }
}
