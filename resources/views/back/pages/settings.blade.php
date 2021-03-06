@extends('back.layouts.admin')

@section('css.import')
	<style>
		.panel_toolbox {float: left;min-width: 0px;}
		
		.w15 {width:15%;text-align: center;}
		.w10 {width:10%;text-align: center;}
		.w20 {width:20%;}
		.w30 {width:30%;text-align: center;}
 		.td-description{
	        text-overflow: ellipsis;
	        white-space: nowrap;
	        overflow: hidden; 
	        padding-right: 30px
	    }
	    th{
	    	background-color: #2f4358;
	    	color: white
	    }

	    input {
	    	width: 100%;
	    	height: 35px;
	    	padding: 5px
	    }



	</style>
@stop

@section('content')

	<div class="box-header with-border">
		<span class="pull-left">
			<h3 class="box-title">Settings <small>Transaction list</small></h3>
		</span>
		<span class="pull-right">
			{{-- <a href=" {{ url( $route . '/create') }} " class="btn btn-success">Create New</a> --}}
		</span>
	</div>


<div class="row">

	<div class="col-md-12 col-sm-12 col-xs-12">

	    <div class="x_panel">
		    <div class="x_title">
		        <h2>Listing</h2>
			        <ul class="nav navbar-right panel_toolbox">
			          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			          </li>
			        </ul>
		        	<div class="clearfix"></div>
		    </div>


	     <div class="x_content">

			<div class="row">
		        <div class="col-sm-10 col-md-offset-1">



				<form  method="POST" action="{{ route('settings.Update') }}" class="form-horizontal">

					{{ csrf_field() }}
					{{-- {{  method_field('PUT')) }} --}}


		            <table id="table" class="table table-striped table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">

		                <thead>
		                    <tr role="row">
		                        <th class="w15">Field</th>
		                        <th class="">Value</th>
		                        <th class="w30 hidden-xs hidden-sm">Description</th>
		                    </tr>
		                </thead>

		                <tbody>
							@foreach ($datas as $data)
								<tr>
									<td>
										{{  $data->field  }}
										<input type="hidden"  
											name="field[]" 
											value="{{  $data->field  }}">
									</td>
									<td>
										<input type="text"  
											name="value[]" 
											value="{{  $data->value  }}">
									</td>
									<td>
										{{  $data->description  }}
										<input type="hidden"  
											name="description[]" 
											value="{{  $data->description  }}">						
									</td>
								{{-- 	<td>
										{{  $data->id  }}
										<input type="text"  
											name="id[]" 
											value="{{  $data->id  }}">						
									</td> --}}

								</tr>	
							@endforeach
		                </tbody>

		            </table>


			        <div class="ln_solid"></div>
			   		<div class="form-group text-center">
			   			<button type="submit" class="btn btn-success">Update Record</button>
			        </div>

		        </form>

		        </div>


	    	</div>
	      </div>
	    </div>
  	</div>

</div>


@stop




@push('scripts')
<script>







	$(document).ready(function(){
 		$(function() {

     //        $('#table').DataTable({
     //            processing: true,
     //            serverSide: true,
     //            ajax: '',
     //            order: [[4, 'desc']],		//start with Zero(0)
     //            columns: [
     //                { data: 'code', name: 'code' ,"searchable": true},
     //                { data: 'name', name: 'name' ,"searchable": true},
     //                { data: 'description', name: 'description' ,"searchable": true},
     //                { data: 'active', name: 'active' ,"searchable": true},
     //                { data: 'created_at', name: 'created_at' ,"searchable": true },
     //                { data: 'action', name: 'action', "orderable":false,"defaultContent": ""}
     //            ]
     //        });


     //        $(document).on('click', '#btndelete', function(){  

		   //  var token = $(this).data("token");
		   //  var docid = $(this).data("docid");

	    //    	swal({ title: "Are you sure?",   text: "You will not be able to recover this record!",   
	    //    			type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, delete it!",   closeOnConfirm: true }, 
	    //    		function(){   

  			// 		var value = {
     //                    'id':docid,
     //                    _token:$('meta[name="csrf-token"]').attr('content')
     //                };

					// $.ajax({  
     //                     url:'', 			//URL::to('/category/delete')
     //                     type:"delete",  
     //                     data: value,  
     //                     success:function(){ 
     //                     	$('#table').DataTable().ajax.reload();
					// 		toastr["success"]("Record was successfully deleted.", "Success")
     //                     }  
     //                });  
     //             });
	    // 	});



        });	
	});

</script>
@endpush 





