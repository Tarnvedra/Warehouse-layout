@extends('home')

@section('content')
 
@include('include/navbar')

        <h2>Edit items form </h2>
        <!-- form to input a new product to the system and call Javascript
        function additems-->
        <hr>
        
        <form id="itemForm"  method="POST" action="javascript:calculateVolDensity();" enctype="multipart/form-data" > <!-- onsubmit="calculateVolDensity()" -->

                <div class="form-group row">
                    <div class="col-md-2">
                     <label class="label-color" for="sku">Enter Product SKU (5 Chars) :</label>
                    </div>
                     <div class="col-md-10">
                     <input type="text" class="form-control col-sm-4" name="sku" pattern="[A-Z0-9]{5}" title="Please enter a valid sku using only alphanumeric characters A-Z 0-9" maxlength="5" required>
                     </div>
                    </div>
                    
                <div class="form-group row">
                    <div class="col-md-2">
                            <label class="label-color" for="item">Enter Product description : </label>
                    </div>  
                            <div class="col-md-10">
                            <input class="form-control col-sm-4" type="text-area" name="item"  maxlength="60" required>
                            </div>
                </div> 
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="label-color" for="width">Enter Width in (cm) : </label>
                        </div>  
                            <div class="col-md-10">
                                <input class="form-control col-sm-4" type="number" name="width" id="width" step="any" onblur="checkWidth(width)" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="label-color" for="length">Enter Length in (cm) : </label>
                        </div>
                            <div class="col-md-10">
                            <input  class="form-control col-sm-4" type="number" name="length" id="length" step="any" onblur="checkLength(length)" required>
                            </div>
                    </div>
                    


                    <div class="form-group row">
                        <div class="col-md-2">

                        <label class="label-color" for="height">Enter Height in (cm) : </label>
                        </div>
                        <div class="col-md-10">
                        <input class="form-control col-sm-4" type="number" name="height" id="height" step="any" onblur="checkHeight(height)" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                        <label class="label-color" for="mass">Enter Mass in (Kg) :  </label>
                        </div>
                        <div class="col-md-10">
                        <input class="form-control col-sm-4" type="number" name="mass" id="mass" step="any" onblur="checkMass(mass)" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                        <label class="label-color" for="customFile">Choose image file : </label>
                        </div>
                        <div class="col-md-10">
                        <input type="file" class="form-control col-sm-4" id="customFile" required>
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
           <!-- <input type="hidden" name="size" id="size" value=""> -->
        </form>
                 
                
        @include('include/dashboard')
@endsection
