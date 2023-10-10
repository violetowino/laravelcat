@extends('client.client_dashboard')
@section('client')

<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="text-primary h-font text-center fs-3">Map</h2>
            <hr>
            <iframe class="w-100 rounded"  height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.12286490899!2d37.002073358037904!3d-1.1353063261187792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4616a21d035d%3A0xd46c6efa3589f45f!2sJuja!5e0!3m2!1sen!2ske!4v1688729411760!5m2!1sen!2ske" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

</div>
    
@endsection
