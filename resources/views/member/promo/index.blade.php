@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Mobil Promo</h4>
                </div>
                <div class="row">
                    @if(!$productPromo->isEmpty())
                        @foreach($productPromo as $promo)
                            <div class="col-md-6">
                                <div class="promo_wrapper">
                                    <div class="promo-img">
                                        <img src="{{ URL::to('/') }}/promo/{{ $promo->photo }}">
                                    </div>
                                    <div class="promo-name">
                                        {{ $promo->nama }}
                                    </div>
                                    <div class="promo-percent">
                                        10 %
                                    </div>
                                    <div class="promo-price">
                                        {{ $promo->harga }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                   @else
                    <div class="alert alert-danger">
                        Product promo kosong
                    </div>
                   @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .btn-danger{
        width: 100%;
    }
    .promo_wrapper {
        background: #f5f5f5;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px 10px;
        border-radius: 10px;
        box-shadow: 2px 3px 5px 0px #efefef;
    }
    .promo-img img{
        width: 100%;
    }
    .promo-percent {
        width: 12%;
        background: #de0202;
        font-size: 13px;
        padding: 5px;
        text-align: center;
        color: #fff;
        border-radius: 5px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
@endsection 