@extends('layouts.app')

@section('content')
<body background="img/go.jpg  ">
<div class="container">
@if (Session::has('flash_message')) 
<div class="alert alert-success">{{Session::get('flash_message') }}</div>
@endif
    <div class="column">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="panel panel-default " >
                <div class="panel-heading">Bikes</div>
                
                <div class="panel-body">
                  
                  <h3 align="left">
                     Name: {{ $product -> name }} <br><br> 
                    </h3>
                        <a href=""><img src="{{ $product->img }}" width="200px" height="150px"> 
                        </a>
                        <br>
                       <p > 
                            Description: {{ $product -> description }}
                       </p>

                       <p>
                           Barcode: {{ $product -> barcode }}
                       </p>

                        <p> Price: Php
                            {{ $product -> price }}&nbsp;
                        </p>

                      
                            <a href="/addtocart/{{$product ->id }}">
                                <button class="btn btn-success " >
                                     Add to cart

                                </button>
                            </a>




                
      
              

                </div>
            </div>
        </div>
          @endforeach
    </div>
</div>


@endsection
</body>