@extends('layouts.app-admin')

@section('title')
    Dashboard
@endsection

@section("breadcrumbs")
    {{-- {{ Breadcrumbs::render('dashboard') }} --}}
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Beranda</div>
              <div class="card-body">
                  @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                  @endif Anda sudah masuk!
              </div>
          </div>
      </div>
  </div>
</div>
@endsection