@extends(config("piplmodules.back-view-layout-location"))

@section("meta")
<title>Update Country Information</title>
@endsection

@section('content')
<div class="container">
    <h1>Update Country Information</h1>
    
    @if (session('update-country-status'))
          <div class="alert alert-success">
                {{ session('update-country-status') }}
          </div>
    @endif
  	<div class="row">
    <div class="col-md-12 col-sm-12">
  	<form role="form" method="post" >
    <legend>Country Details</legend>
    {!! csrf_field() !!}
    
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" value="{{old('name',$country_info->name)}}">
    
    @if ($errors->has('name'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                </span>
        @endif
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
  
</form>
  </div>
  
  </div>

</div>
@endsection