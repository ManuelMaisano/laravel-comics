@extends('layouts.app')


@section('content')
<section  class="container d-flex flex-wrap">
    @foreach ( $products as $product )
    <div class="row">
        <div class="col d-flex align-items-stretch p-2 m-2">
            <div class="card">
                <img src="{{$product['thumb']}}" class="card-img-top thumb" style="width: 18rem;" alt="descr">
                <div class="card-body">
                            
                        </div>
            </div>
        </div>

    </div>

    @endforeach
</section>
@endsection