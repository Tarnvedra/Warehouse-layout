@extends('home')

@section('content')
 
@include('include/navbar')

        <h2>Edit items form </h2>
        <!-- form to edit a current product to the system and call Javascript for calculation of volume density and size -->
        <hr>
        
        <form id="itemForm"  method="POST" action="{{ route('products.update', $product->sku)}}" enctype="multipart/form-data" onsubmit="calculateVolDensity()">
            {{ csrf_field() }}
           {{ method_field('PUT') }} 

                <div class="form-group row">
                    <div class="col-md-2">
                     <label class="label-color" for="sku">Enter Product SKU (5 Chars) :</label>
                    </div>
                     <div class="col-md-10">
                     <input type="text" value="{{$product->sku}}" class="form-control col-sm-4" name="sku" pattern="[A-Z0-9]{5}" title="Please enter a valid sku using only alphanumeric characters A-Z 0-9" maxlength="5" required placeholder="sku">
                     </div>
                    </div>
                    
                <div class="form-group row">
                    <div class="col-md-2">
                            <label class="label-color" for="item">Enter Product description : </label>
                    </div>  
                            <div class="col-md-10">
                            <input class="form-control col-sm-4" type="text-area" value="{{$product->description}}" name="description"  maxlength="60" placeholder="description">
                            </div>
                </div> 
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="label-color" for="width">Enter Width in (cm) : </label>
                        </div>  
                            <div class="col-md-10">
                                <input class="form-control col-sm-4" type="number" value="{{$product->width}}" name="width" id="width" step="any" onblur="checkWidth(width)" placeholder="width">
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="label-color" for="length">Enter Length in (cm) : </label>
                        </div>
                            <div class="col-md-10">
                            <input  class="form-control col-sm-4" type="number" value="{{$product->length}}" name="length" id="length" step="any" onblur="checkLength(length)" placeholder="length">
                            </div>
                    </div>
                    


                    <div class="form-group row">
                        <div class="col-md-2">

                        <label class="label-color" for="height">Enter Height in (cm) : </label>
                        </div>
                        <div class="col-md-10">
                        <input class="form-control col-sm-4" type="number" value="{{$product->height}}" name="height" id="height" step="any" onblur="checkHeight(height)" placeholder="height">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                        <label class="label-color" for="mass">Enter Mass in (Kg) :  </label>
                        </div>
                        <div class="col-md-10">
                        <input class="form-control col-sm-4" type="number" value="{{$product->mass}}"  name="mass" id="mass" step="any" onblur="checkMass(mass)" placeholder="mass">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                        <label class="label-color" for="customFile">Choose image file : </label>
                        </div>
                        <div class="col-md-10">
                        <input type="file" class="form-control col-sm-4" id="customFile">
                        </div>
                      </div>

                    <div class="form-row">
                        <div class="col-auto">         
                <input type="submit" class="btn btn-primary pl-3" value="submit">
                        </div>
                        <div class="col-auto">
                <input type ="reset" class="btn btn-danger pr-3" value ="reset">
                        </div>
                    </div>
            <input type="hidden" name="volume" id="volume" value="" >
            <input type="hidden" name="density" id="density" value="" >
            <input type="hidden" name="size" id="size" value="">
        </form>
                 
                
        @include('include/dashboard')
@endsection
