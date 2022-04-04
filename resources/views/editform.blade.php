@extends('layouts.app')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Edit Form</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('list') }}">List</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        
                                    </div>
                                    <div class="card-body">
                    <form method="POST" action="{{ route('update') }}" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
						<input id="id" type="hidden" class="form-control" name="id" value="{{ $data['id'] }}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data['name'] }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data['email'] }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" autofocus>{{ $data['address'] }}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">DOB</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $data['dob'] }}" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
								  <input {{ $data['status'] == 0 ? 'checked' : ''}} style="margin-top: 6px;margin-left: 0px;" class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status" value="0" checked>
								  <label class="form-check-label" for="inlineRadio1">Active</label>
								</div>
								<div class="form-check form-check-inline">
								  <input {{ $data['status'] == 1 ? 'checked' : ''}} style="margin-top: 6px;margin-left: 0px;" class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="status1" value="1">
								  <label class="form-check-label" for="inlineRadio2">Inactive</label>
								</div>

                                @error('status')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education') }}</label>

                            <div class="col-md-6">
                                <select id="education" class="form-control @error('education') is-invalid @enderror" name="education" required autocomplete="education" autofocus>
									<option value=''>Select Eduction</option>
									<option value='Post Graduation' {{ $data['education'] == 'Post Graduation' ? 'selected' : '' }}>Post Graduation</option>
									<option value='Graduation' {{ $data['education'] == 'Graduation' ? 'selected' : '' }}>Graduation</option>
									<option value='Intermediate' {{ $data['education'] == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
									<option value='SSC' {{ $data['education'] == 'SSC' ? 'selected' : '' }}>SSC</option>
								</select>
                                @error('address')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       

                        <div class="form-group row">
                            <label for="pincode" class="col-md-4 col-form-label text-md-right">Pincode</label>

                            <div class="col-md-6">
                                <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ $data['pincode'] }}" required autocomplete="pincode">

                                @error('pincode')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="profile_pic" class="col-md-4 col-form-label text-md-right">profile_pic</label>

                            <div class="col-md-6">
								<input type="file" name="profile_pic" id="profile_pic" placeholder="Choose Profile Pic">
								
								@error('profile_pic')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
                        </div>
						
						<div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <select id="country" class="form-control @error('country') is-invalid @enderror" name="country" required autocomplete="country" autofocus>
									<option value=''>Select Country</option>
									@foreach ($countries as $country)
										<option value="{{ $country }}" {{ $data['country'] == $country ? 'selected' : '' }}>{{ $country }}</option>
									@endforeach
								</select>
                                @error('country')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="city" autofocus>
									<option value=''>Select City</option>
									@foreach ($cities as $city)
										<option value="{{ $city->city_name }}" {{ $data['city'] == $city->city_name ? 'selected' : '' }}>{{ $city->city_name }}</option>
									@endforeach
								</select>
                                @error('city')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="styleSelector">
            </div>
        </div>
    </div>
<script>
$(document).ready(function() {
	$('#country').on('change', function() {
		var countryName = this.value;
		$("#state-dropdown").html('');
		$.ajax({
			url:"{{url('getCity')}}",
			type: "POST",
			data: {
			countryName: countryName,
			_token: '{{csrf_token()}}' 
			},
			dataType : 'json',
			success: function(result){
				$('#city').html('<option value="">Select City</option>'); 
				$.each(result,function(key,value){
					$("#city").append('<option value="'+value.city_name+'">'+value.city_name+'</option>');
				});	
			}
		});
	});
});
</script>
@endsection