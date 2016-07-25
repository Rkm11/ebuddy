@extends(config("piplmodules.back-view-layout-location"))

@section("meta")

<title>Update Global setting Info</title>

@endsection

@section('content')
<div class="page-content-wrapper">
		<div class="page-content">
                    <!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="{{url('admin/dashbard')}}">Dashboard</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="{{url('admin/global-settings')}}">Global setting </a>
                                        <i class="fa fa-circle"></i>
					
				</li>
				<li>
					<a href="javascript:void(0);">Update Global setting value</a>
					
				</li>
                        </ul>
      <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box blue">
             <div class="portlet-title">
                        <div class="caption">
                                <i class="fa fa-gift"></i> Update Global setting parameter value
                        </div>

             </div>
             <div class="portlet-body form">
            <form role="form" class="form-horizontal" action="{{url('/admin/update-global-setting/'.$setting->id)}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                 <div class="form-body">
                   <div class="row">
                        <div class="col-md-12">    
                      <div class="col-md-8">  
                         <div class="form-group">
                          <label class="col-md-6 control-label" for="{{$setting->slug}}"> {{$setting->name}}</label>
                       
                            <div class="col-md-6">     
                              @if(in_array("image",explode("|",$setting->validate)))
                               <input name="value" type="file" class="form-control" id="{{$setting->slug}}">
                               @else
                                 <input name="value" type="text" class="form-control" id="{{$setting->slug}}" value="{{old('value',$setting->value)}}">
                                @endif
                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
                                @endif
                          </div>
                       
                      </div>
                    <div class="form-group">
                         <div class="col-md-12">   
                            <button type="submit" id="submit" class="btn btn-primary  pull-right">Update</button>
                         </div>
                  </div>
                          
 </div>
              </div>
            </div>
                
             </div>
    
            </form>
        </div>
    </div>
    </div>
    </div>
 @endsection