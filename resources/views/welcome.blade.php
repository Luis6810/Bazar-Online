@extends('layouts.app')

@section('content')
    
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">¿TIenen Comida?</h1>
              <p class="lead">Un lugar donde puedes disfrutar de tu comida favorita.</p>
            </div>
        </div>

        <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3 border-dark" style="">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{$randomElement->image}}" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$randomElement->name}}</h5>
                          <p class="card-text">{{$randomElement->description}}</p>
                          <p class="main__txt">Disponible: {{$randomElement->stock}}</p>
                            <h4 class="main_price">Precio:${{$randomElement->price}}</h4>
                                <a href="" class="btn btn-primary">Añadir al carrito</a>
                                <a href=" {{route('comprar',$randomElement->id)}} " class="btn btn-success">Comprar</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <h1 class="display-5">Categorias</h1>
                <a class="btn btn-block btn-primary btn-lg" href=" {{route('bebidas')}} ">Bebidas</a>
                <a class="btn btn-block btn-primary btn-lg" href="{{route('postres')}}">Postres</a>
                <a class="btn btn-block btn-primary btn-lg" href="{{route('especiales')}}">Especiales</a>
            </div>
        </div>
    </div>
@endsection
