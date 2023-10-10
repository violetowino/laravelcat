@extends('director.director_dashboard')
@section('director')

<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 mb-3 middle-wrapper">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-primary text-center h-font">Email A Specific Manager</h3><hr>
                    <form class="forms-sample" method="POST" action="{{ route('email.send') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label h-font" style="color: #fb039c;">Select Manager's Email:</label>
                            <select name="user_email" id="user_email" class="form-select">
                                <option selected="" disabled="">Select Email Address</option>
                                @foreach($managerEmails as $email)
                                    <option value="{{ $email }}">{{ $email }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                        <div class="mb-3">
                            <label for="exampleInputTextarea" class="form-label h-font" style="color: #fb039c;">Email Message:</label>
                            <textarea name="notes" id="notes" class="form-control" rows="4"></textarea>
                        </div>

                        @error('user_id')
                            <span>{{ $message }}</span>
                        @enderror

                        <button type="submit"name="send_individual" class="btn btn-outline-primary me-2">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xl-8 mt-4 middle-wrapper">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-primary text-center h-font">Email All Managers:</h3><hr>
                    <form class="forms-sample" method="POST" action="{{ route('email.send') }}">
                        @csrf
            
                        <div class="mb-3">
                            <label for="exampleInputTextarea" class="form-label h-font" style="color: #fb039c;">Email Message to All Managers:</label>
                            <textarea name="message_all" id="message_all" class="form-control" rows="4"></textarea>
                        </div>
                        @error('message_all')
                            <span>{{ $message }}</span>
                        @enderror
            
                        <button type="submit" name="send_group" class="btn btn-outline-primary me-2">Send</button>
                    </form>     
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
