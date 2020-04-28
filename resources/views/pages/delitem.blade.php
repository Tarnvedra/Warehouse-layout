@extends('home')

@section('content')
 
@include('include/navbar')

        <h2> Delete item form </h2>
        <!-- form to input a new product to the system and call Javascript
        function additems-->
        <hr>
        
        <form id="itemForm"  method="POST" action="javascript:test();" > <!-- onsubmit="calculateVolDensity()" -->

                <div class="form-group row">
                     <label class="label-color" for="sku">Enter Product SKU (5 Chars) :</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control col-sm-4" name="sku" pattern="[A-Z0-9]{5}" title="Please enter a valid sku using only alphanumeric characters A-Z 0-9" maxlength="5" required>
                     </div>
                    </div>
                    
                <
                    <div class="form-row">
                        <div class="col-auto">
                <input type="submit" class="btn btn-primary pl-3" value="submit">
                        </div>
                        <div class="col-auto">
                <input type ="reset" class="btn btn-danger pr-3" value ="reset">
                        </div>
                    </div>
           
        </form>
                 
                
        @include('include/dashboard')
@endsection
