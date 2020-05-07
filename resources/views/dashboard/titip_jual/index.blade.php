@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Titip Jual</h4>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$titip_juals->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Produk
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Merek
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Tahun
                                </th>
                                <th>Phone</th>
                                <th>Alamat</th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($titip_juals as $titip_jual)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $titip_jual->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $titip_jual->titip_jual->subKategori->nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $titip_jual->titip_jual->merek->nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $titip_jual->titip_jual->tahun->tahun_produksi }}
                                </td>
                                <td>{{ $titip_jual->titip_jual->nomor_telpn }}</td>
                                <td>{{ $titip_jual->alamat_lengkap }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                          <tbody>
                            <tr>Promo kosong</tr>
                          </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .btn-danger{
        width: 100%;
    }
</style>
@endsection 