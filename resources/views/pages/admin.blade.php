@extends('layouts.app')

@section('title')
    Admin
@endsection

@section('content')
{{-- 1. form create admin baru
2. delete this admin  --}}
<section class="ftco-section" id="admin">
    <div class="container">
        {{-- section for users --}}
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                    @empty
                      <tr>
                        <td colspan="5" class="text-center">Tidak ada user</td>
                      </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- section for count --}}
        <div class="row align-items-center justify-content-center text-center mt-5">
            <div class="col-md-5 mb-5">
                <h4 class="ftco-sub-title">Jumlah User</h4>
                <h2 class="ftco-primary-title display-4">{{ $countUsers }}</h2>
            </div>
            <div class="col-md-5 mb-5">
                <h4 class="ftco-sub-title">Jumlah Restoran</h4>
                <h2 class="ftco-primary-title display-4">{{ $countRestaurants }}</h2>
            </div>
        </div>

        {{-- section for edit --}}
        <div class="row">
            <form action="{{ url('users') }}/{{ Auth::id() }}" method="POST" class="container" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-5 order-md-first mb-5">
                        <h2 class="ftco-sub-title display-4">Edit Admin</h2>
                        <div class="form-group mb-5">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control mb-4" value="{{ $admin->name }}" />
                            @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
        
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control mb-4" placeholder="your password" value="" />
                            @if($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
        
                            <label for="password-retype">Confirm Password:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" class="form-control mb-4" placeholder="your password" value="" />
                        </div>
                        <p><button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection