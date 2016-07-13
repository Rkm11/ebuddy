@extends(config("piplmodules.back-view-layout-location"))

@section("meta")

<title>Manage Cities</title>

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
					<a href="javascript:void(0)">Manage Cities</a>
					
				</li>
                        </ul>
    
          
           @if (session('update-city-status'))
          <div class="alert alert-success">
                {{ session('update-city-status') }}
          </div>
        @endif
        
        @if (session('city-status'))
          <div class="alert alert-success">
                {{ session('city-status') }}
          </div>
         @endif
        <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="glyphicon glyphicon-globe"></i>Manage Cities
							</div>
							<div class="tools">
								<a class="collapse" href="javascript:;" data-original-title="" title="">
								</a>
								<a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title="">
								</a>
								<a class="reload" href="javascript:;" data-original-title="" title="">
								</a>
								<a class="remove" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
                                                 <div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a href="{{url('admin/cities/create')}}" id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
									
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="tblcities">
							<thead>
							<tr>
								  <th class="table-checkbox">
									<input type="checkbox" class="group-checkable" id="select_all_delete" data-set="#tblcities .checkboxes"/>
                                                            	  </th>
                                                                 
                                                                    <th>Id</th>
                                                                    <th>Name</th>
                                                                    <th>Country</th>
                                                                    <th>State</th>
                                                                    <th>Created On</th>
                                                                    <th>Last Updated On</th>
                                                                    <th>Action</th>
                                                                    <th>Multi Language</th>
                                                                    <th>Delete</th>
                                                        </tr>
							</thead>
                                                        </table>
                                                         <input type="button" onclick='javascript:deleteAll("{{url('/admin/cities/delete-selected')}}")' name="delete" id="delete" value="Delete Selected" class="btn btn-danger">
						</div>
					</div>
	
		</div>
	</div>
<script>
$(function() {
    $('#tblcities').DataTable({
        processing: true,
        serverSide: true,
        ajax: {"url":'{{url("/admin/cities-data/list")}}',"complete":afterRequestComplete},
        columnDefs: [{
        "defaultContent": "-",
        "targets": "_all"
      }],
        columns: [
           
            {data:   "id",
              render: function ( data, type, row ) {
                
                    if ( type === 'display' ) {
                        
                        return '<div class="checker"> <span><input class="checkboxes" type="checkbox"  id="delete'+row.id+'" name="delete'+row.id+'" value="'+row.id+'"></span></div>';
                    }
                    return data;
                },
                  "orderable": false,
                  
               },
            { data: 'id', name: 'id'},
           { data: 'name', name: 'name'},
            { data: 'country', name: 'name'},
              { data: 'state', name: 'state'},
           { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            {data:   "Action",
              render: function ( data, type, row ) {
               
                    if ( type === 'display' ) {
                        
                        return '<a class="btn btn-sm btn-primary" href="{{url("admin/cities/update")}}/'+row.id+'">Update</a>';
                    }
                    return data;
                },
                  "orderable": false,
                  name: 'Action'
                  
            },
             {data:   "Language",
                 render: function ( data, type, row )
                 {
               
                    if ( type === 'display' ) {
                        
                        return '<a class="btn btn-sm btn-primary" href="{{url("admin/update-global-setting")}}/'+row.id+'">Multi Language</a>';
                    }
                    return data;
                },
                  "orderable": false,
                  name: 'Action'
                  
            },
            {data:   "Delete",
              render: function ( data, type, row ) {
               
                    if ( type === 'display' ) {
                        
                        return '<form id="delete_city_'+row.id+'" method="post" action="{{url("/admin/cities/delete")}}/'+row.id+'">{{ method_field("DELETE") }} {!! csrf_field() !!}<button onclick="confirmDelete('+row.id+')" class="btn btn-sm btn-danger" type="button">Delete</button></form>';
                    }
                    return data;
                },
                  "orderable": false,
                  name: 'Action'
                  
            },
          
             
               
        ]
    });
});
function confirmDelete(id)
{
    if(confirm("Do you really want to delete this city?"))
    {
        
        $("#delete_city_"+id).submit();
    }
    return false;
    }
</script>
@endsection
