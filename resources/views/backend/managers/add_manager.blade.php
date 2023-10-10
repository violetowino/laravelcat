@extends('director.director_dashboard')
@section('director')


<div class="page-content">
    <div class="row profile-body">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('all.managers') }}" class="btn btn-inverse-info"> All Managers</a>
            </ol>
        </nav>
        
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary text-center h-font mb-3">Add Manager</h3>
            <hr>

                    <form class="forms-sample" method="POST" action="{{route('store.manager')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control 
                                @error('name') is-invalid @enderror">
                                @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control 
                                @error('email') is-invalid @enderror">
                                @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">ID Number</label>
                            <input type="text" name="id_number" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="country_code" id="country_code" class="form-control">
                                        <option value="+254">+254</option>
                                    </select>
                                </div>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control 
                                @error('password') is-invalid @enderror">
                                @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Duty Station</label>
                            <input type="text" name="duty_station" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection