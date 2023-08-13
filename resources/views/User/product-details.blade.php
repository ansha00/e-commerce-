@extends('user.layout.main')
@section('content')

<div class="containers">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top " style="height:350px" src="{{ asset($product->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        Price: <u class="card-text" style="font-family:'nunito'">{{ $product->price }}</u><br>
                        Category: <u class="card-text" style="font-family:'nunito'">{{ $product->category['name'] }}</u>

                        <p class="card-text">{{ $product->description }}</p>
                        <a href="/delete/{{$product->id}}" class="btn btn-primary">Delete</a>
                        <a href="/edit/{{$product->id}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection