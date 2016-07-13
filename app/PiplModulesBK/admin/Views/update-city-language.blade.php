@extends(config("piplmodules.back-view-layout-location"))

@section("meta")
<title>Update City Information</title>
@endsection

@section('content')
<div class="container">
    <h1>Update City Information</h1>
    
    @if (session('update-city-status'))
          <div class="alert alert-success">
                {{ session('update-city-status') }}
          </div>
    @endif
  	<div class="row">
    <div class="col-md-12 col-sm-12">
  	<form role="form" method="post" >
    <legend>City Details</legend>
    {!! csrf_field() !!}
    
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" value="{{old('name',$city_info->name)}}">
    
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