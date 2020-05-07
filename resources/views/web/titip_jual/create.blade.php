@extends('web.layout')
@section('content')
	<div class="container">
		<div class="row">
			<!-- Best Sellers Item -->
				<div class="col-lg-7" style="margin-top: 37px;">
					<h3 style="font-size: 38px; font-weight: bold;">Ayo Titip Jual</h3>
				    <div class="description_jual">
				    	<ul>
				    		<li>-Cek harga jual mobil secara gratis</li>
				    		<li>-Jadwalkan inspeksi mobil secara gratis</li>
				    		<li>-Dapatkan penawaran dan pembayaran instan</li>
				    	</ul>
				    </div>
				</div>
				<div class="col-lg-5 bg-titipJual">
					<div class="formTitipJual">
					{!! Form::open(array('route' => 'titip-jual.store', 'files'=>true, 'id'=>'form-product')) !!}
                        {{ csrf_field() }}
					 		<div class="form-group" style="padding-right: 0px; padding-left: 0px;">
				 				<select name="subkategori_id" class="form-control">
				 					@if(!$subKategoris->isEmpty())
					 				<option>Pilih Merk</option>
					 					@foreach($subKategoris as $subKategori)
					 						<option value="{{ $subKategori->id }}">
					 							{{ $subKategori->nama }}
					 						</option>
					 					@endforeach
					 				@else
					 					<div class="alert alert-danger">Merk Kosong</div>
					 				@endif
					 			</select>
					 		</div>
					 		<div class="form-group" style="padding-right: 0px; padding-left: 0px;">
				 				<select name="merek_id" class="form-control">
				 					@if(!$merks->isEmpty())
					 				<option>Pilih Model</option>
					 					@foreach($merks as $merk)
					 						<option value="{{ $merk->id }}">
					 							{{ $merk->nama }}
					 						</option>
					 					@endforeach
					 				@else
					 					<div class="alert alert-danger">Merk Kosong</div>
					 				@endif
					 			</select>
					 		</div>
					 		<div class="form-group" style="padding-right: 0px; padding-left: 0px;">
				 				<select name="tahun_id" class="form-control">
				 					<option>Pilih Tahun</option>
				 					@if(!$tahunProduksis->isEmpty())
					 					@foreach($tahunProduksis as $tahun)
					 						<option value="{{ $tahun->id }}">
					 							{{ $tahun->tahun_produksi }}
					 						</option>
					 					@endforeach
					 				@else
					 					<div class="alert alert-danger">tahun Kosong</div>
					 				@endif
					 			</select>
					 		</div>
					 		<div class="form-group" style="padding-right: 0px; padding-left: 0px;">
				 				<select name="transmisi_id" class="form-control" style="padding-right: 0px;">
				 					<option>Pilih Transmisi</option>
				 					@if(!$transmisi->isEmpty())
					 					@foreach($transmisi as $trans)
					 						<option value="{{ $trans->id }}">
					 							{{ $trans->nama }}
					 						</option>
					 					@endforeach
					 				@else
					 					<div class="alert alert-danger">Merk Kosong</div>
					 				@endif
					 			</select>
					 		</div>
					 		<div class="form-group">
				 				<input type="text" name="lokasi" class="form-control" placeholder="Alamat" style="margin-left: 10px;">
					 		</div>
					 		<div class="form-group">
				 				<input type="text" name="nomor_telpn" class="form-control" placeholder="+62 Nomor Hp" style="margin-left: 10px;">
					 		</div>
					 		<div class="form-group">
					 			<button class="btn btn-success" style="width: 100%; font-weight: bold; margin-left: 10px;">Dapatkan harga mobil</button>
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