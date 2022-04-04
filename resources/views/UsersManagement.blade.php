@extends('layouts.app')
@section('content')
<style>
.textalign{
	text-align:center
}
</style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Users Management List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="{{url("/home")}}"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item">Users List</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            @if (session('success'))
								<div class="alert alert-success background-success">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="icofont icofont-close-line-circled text-white"></i>
									</button>
									<strong>Success!</strong> {{ session('success') }}
								</div>
							@elseif(session('failed'))
								<div class="alert alert-danger background-danger">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<i class="icofont icofont-close-line-circled text-white"></i>
									</button>
									<strong>Failed!</strong> {{ session('failed') }}
								</div>
                            @endif
                            <div class="card">
                                <div class="card-header" style="text-align: right">
                                    <button class="btn btn-success"><a style="color: #ffffff" href="{{ route('addForm') }}">Add New</a></button>
                                </div>
								
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="example" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>
                                                <th>Sno</th>
												<th>Profile Pic</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
													@if(empty($d->profile_pic))
														<div class = "thumbnail textalign">
															<img src="{{ asset('public/uploads/' . 'no-image-available-icon.png') }}" width="60" height="60"/>
														</div>
													@else
														<div class = "thumbnail textalign">
															<img src="{{ asset('public/uploads/userimages/' . $d->profile_pic) }}" width="60" height="60"/>
														</div>
													@endif
												</td>
                                                <td>{{ $d->name }}</td>
                                                <td>{{ $d->email }}</td>
                                                <td>{{ $d->age }}</td>
												<td>
													@if($d->status == 0)
														<span class="badge badge-primary">Active</span>
													@elseif($d->status == 1)
														<span class="badge badge-warning">Inactive</span>
													@endif
												</td>
                                                <td>
													<a class="btn btn-info" href="{{ route('view',$d->id) }}">View</a>
													<a class="btn btn-primary" href="{{ route('edit',$d->id) }}">Edit</a>
													<button class="btn btn-danger delete" data-id="{{ $d->id }}"><i class="icofont icofont-ui-delete"></i></button>
												</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable( {
			"paging":   true,
			"ordering": true,
			"info":     true,
			"searching":     true,
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		} );
	} );
	
    $(document).on("click", ".delete", function () {
		var url = '{{route("delete")}}';
        var id = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },function () {
            $.ajax({
                url: url,
                method: "POST",
                data: {
                    id: id,
                },
                dataType: 'JSON',
                beforeSend: function (request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function (response) {
                    console.log(response);
                    if (response.status) {
                        swal("Deleted!", "Your file has been deleted.", "success");
                        window.location.href = "{{route("list")}}";
                    }
                },
                error: function (error) {

                }
            });
        });
    });


</script>

@endsection