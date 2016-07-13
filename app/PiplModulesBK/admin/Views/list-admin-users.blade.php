@extends(config("piplmodules.back-view-layout-location"))

@section("meta")

<title>Manage Admin users</title>

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
					<a href="javascript:void(0)">Manage Admin Users</a>
					
				</li>
                        </ul>
    
           @if (session('update-user-status'))
          <div class="alert alert-success">
                {{ session('update-user-status') }}
          </div>
         @endif
         
        @if (session('delete-user-status'))
            <div class="alert alert-success">
                  {{ session('delete-user-status') }}
            </div>
      @endif    
    
         <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="glyphicon glyphicon-globe"></i>Manage Admin Users
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
											<a href="{{url('admin/create-user')}}" id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
									
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="tbladminusers">
							<thead>
							<tr>
								  <th class="table-checkbox">
									<input type="checkbox" class="group-checkable" id="select_all_delete" data-set="#tbladminusers .checkboxes"/>
								</th>
                                                                 <th>Id</th>
                                                                 <th>Name</th>
                                                                 <th>Email</th>
                                                                 <th>Role</th>
                                                                 <th>Status</th>
                                                                 <th>Registered On</th>
                                                                  <th>Update</th>
                                                                  <th>Delete</th>
                                                        </tr>
							</thead>
                                                        </table>
                                                     <input type="button" onclick='javascript:deleteAll("{{url('/admin/delete-admin-selected-user')}}")' name="delete" id="delete" value="Delete Selected" class="btn btn-danger">              						</div>
					</div>
	
		</div>
	</div>
<script>
$(function() {
    $('#tbladminusers').DataTable({
        processing: true,
        serverSide: true,
        ajax: {"url":'{{url("/admin/admin-users-data")}}',"complete":afterRequestComplete},
        columnDefs: [{
        "defaultContent": "-",
        "targets": "_all"
      }],
        columns: [
           
            {data:   "id",
              render: function ( data, type, row ) 
              {
                
                      if ( type === 'display' ) {
                        
                        return '<div class="checker"> <span><input class="checkboxes" type="checkbox"  id="delete'+row.id+'" name="delete'+row.id+'" value="'+row.id+'"></span></div>';
                    }
                    return data;
                },
                  "orderable": false,
                  
               },
            { data: 'id', name: 'id'},
            { data: 'name', name: 'name'},
            { data: 'email', name: 'email'},
            { data: 'role', name: 'role'},
            { data: 'status', name: 'status'},
           { data: 'created_at', name: 'created_at' },
       
            {data:   "Update",
              render: function ( data, type, row ) {
               
                    if ( type === 'display' ) {
                        
                        return '<a class="btn btn-sm btn-primary" href="{{url("admin/update-admin-user/")}}/'+row.id+'">Update</a>';
                    }
                    return data;
                },
                  "orderable": false,
                  name: 'Action'
                  
            },
           
             
            {data:   "Delete",
              render: function ( data, type, row ) {
               
                    if ( type === 'display' ) {
                        
                        return '<form id="delete_user_'+row.id+'" method="post" action="{{url("/admin/delete-admin-user")}}/'+row.id+'">{{ method_field("DELETE") }} {!! csrf_field() !!}<button onclick="confirmDelete('+row.id+')" class="btn btn-sm btn-danger" type="button">Delete</button></form>';
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
    if(confirm("Do you really want to delete this user?"))
    {
        
        $("#delete_user_"+id).submit();
    }
    return false;
    }
</script>
@endsection
