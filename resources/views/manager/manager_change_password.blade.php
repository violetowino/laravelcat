@extends('manager.manager_dashboard')
@section('manager')


<div class="page-content">

    <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  
                  <div>
                    <img class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? 
                        url('upload/manager_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="profile">
                  </div>

                </div>
               
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                  <p class="text-muted">{{$profileData->name}}</p>
                </div>

                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{$profileData->email}}</p>
                </div>

                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted">{{$profileData->phone}}</p>
                </div>

                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                  <p class="text-muted">{{$profileData->address}}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
        
  <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="card">
      <div class="card-body">

        <section>
          <header>
              <h2 class="text-lg font-medium text-primary">
                  {{ __('Update Password') }}
              </h2>
      
              <p class="mt-3 text-sm text-warning text-gray-600">
                  {{ __('Ensure your account is using a long, random password to stay secure.') }}
              </p>
          </header>
      
          <form method="post" action="{{ route('password.update') }}" class="mt-4 space-y-6">
              @csrf
              @method('put')
      
              <div class="mb-3">
                  <x-input-label for="current_password" :value="__('Current Password')" />
                  <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                  <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
              </div>
      
              <div class="mb-3">
                  <x-input-label for="password" :value="__('New Password')" />
                  <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                  <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
              </div>
      
              <div class="mb-3">
                  <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                  <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                  <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
              </div>
      
              <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                  {{ __('Save') }}
              </button>
            
      
                  @if (session('status') === 'password-updated')
                      <p
                          x-data="{ show: true }"
                          x-show="show"
                          x-transition
                          x-init="setTimeout(() => show = false, 2000)"
                          class="text-sm text-success text-gray-600"
                      >{{ __('Saved.') }}</p>
                  @endif
              </div>
          </form>
      </section>
      </div>
     </div>
   </div>
 </div>
</div>

@endsection