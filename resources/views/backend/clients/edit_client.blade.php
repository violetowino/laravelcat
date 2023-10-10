@extends('manager.manager_dashboard')
@section('manager')


<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="card">
                <div class="card-body">

		            <h3 class="text-primary text-center h-font mb-3">Edit Client</h3>
                    <hr>

                    <form class="forms-sample" method="POST" action="{{ route('update.client')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Full Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}"> 
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">ID Number</label>
                            <input type="text" name="id_number" class="form-control" value="{{$user->id_number}}"> 
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label" style="color: #fb039c;">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select name="country_code" id="country_code" class="form-control">
                                        <option value="+254">+254</option>
                                    </select>
                                </div>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ str_replace('+254', '', $user->phone) }}">
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label" style="color: #fb039c;">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$user->address}}"> 
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection