@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
    <div class="col-md-12">

        <div class="card card-custom">
            <div class="card-body justify-content-center">
                <span class="alert alert-success" name="hide" id="hide" > {{ bcrypt(request()->input('hash')) }} </span>
            </div>
        </div>

        <div class="card card-custom mt-2">
            <div class="card-body">
      
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('postinput')}}" method="GET">
                            <div class="form-group">
                                <label for="password">Enkrip password</label>
                                <input type="text" class="form-control" id="hash" aria-describedby="" placeholder="Enter password" name="hash">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="{{route('dekrip')}}" method="GET">
                            <div class="form-group">
                                <label for="password">Dekrip password</label>
                                <input type="text" class="form-control" id="dekrip" aria-describedby="" placeholder="Enter password" name="dekrip">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


</div>

@endsection