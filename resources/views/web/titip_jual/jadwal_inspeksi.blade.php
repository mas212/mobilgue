@extends('web.layout')
@section('content')
	<div class="container">
		<div class="row">
			<!-- Best Sellers Item -->
				<div class="col-lg-7" style="margin-top: 37px;">
					<h3 style="font-size: 38px; font-weight: bold;">Poin penting</h3>
				    <div class="description_jual">
				    	<ul>
				    		<li>1.Harga yang tertera berdasarkan kondisi mobil yang bagus</li>
				    		<li>2.Kelengkapan dokumen juga menjadi salah satu faktor penentu harga</li>
				    		<li>3.Harga penawaran final untuk mobil akan diberikan setelah proses inspeksi selesai</li>
				    		<li>4.Seluruh proses tidak dipungut biaya, 100% gratis!</li>
				    	</ul>
				    </div>
				</div>
				<div class="col-lg-5 bg-titipJual">
					<div class="formTitipJual">
					{!! Form::open(array('route' => 'apoitment-member.store', 'files'=>true, 'id'=>'form-product')) !!}
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $titip_jual->id }}" name="titip_id">
					 		<div class="form-group">
				 				<input type="text" name="jam_pertemuan" class="form-control" placeholder="Jam Pertemuan" style="margin-left: 10px;">
					 		</div>
					 		<div class="form-group">
				 				<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" style="margin-left: 10px;">
					 		</div>
					 		<div class="form-group">
				 				<input type="text" name="email" class="form-control" placeholder="Masukan Email Kamu" style="margin-left: 10px;">
					 		</div>
					 		<div class="form-group">
				 				<input type="text" name="alamat_lengkap" class="form-control" placeholder="Alamat" style="margin-left: 10px;">
					 		</div>
					 		<div class="form-group">
				 				<select name="pemilik_kendaraan" class="form-control">
				 					<option>Apakah Kamu Pemilik Kendaraan Ini ?</option><option value="iya">IYA</option>
				 					<option value="tidak">TIDAK</option>
				 				</select>
					 		</div>
					 		<div class="form-group">
				 				<select name="iklan" class="form-control">
				 					<option>Dari Mana Anda Mengetahui Kami</option>
				 					<option value="social media">Social Media</option>
				 					<option value="google">Google</option>
				 					<option value="krabat">Krabat</option>
				 				</select>
					 		</div>
					 		<div class="form-group">
					 			<button class="btn btn-success" style="width: 100%; font-weight: bold; margin-left: 10px;">Konfirmasi Pemesanan</button>
					 		</div>
						 </form>
					</div>
				</div>
		</div>
	</div>
	<style type="text/css">
		.formTitipJual {
		    background: #57c5f9;
		    padding: 10px 25px 10px 11px;
		    margin: 10px 10px 10px 10px;
		    border-radius: 10px;
		}
		.description_jual ul li{
			font-size: 15px;
			font-style: italic;
		}
	</style>
@endsection