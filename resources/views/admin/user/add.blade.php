@extends('layouts.app')

@section('content')
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Staff Adding Form
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/user/add')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">အမည်</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ဖုန်းနံပါတ်</label>
          <input type="text" id="phone" name="phone" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" id="password" name="password" class="form-control  @error('password') is-invalid @enderror" required="">
        </div>
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <div class="form-group">
          <label for="exampleInputEmail1">Retype Password</label>
          <input type="text" id="retype_password" name="retype_password" class="form-control  @error('retype_password') is-invalid @enderror" required="">
        </div>
        @error('retype_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <input type="hidden" id="added_by" name="added_by" class="form-control" required="" value="{{ Auth::user()->name }}({{ Auth::user()->type}})">
                          <div class="form-check ">
                            <input class="form-check-input" type="radio" name="type" id="type" value="staff">
                            <label class="form-check-label" for="type">
                                Staff
                            </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type" value="admin">
                                <label class="form-check-label" for="type">
                                    Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                    
      </form>
    </div>
  </div>
</div>
@endsection