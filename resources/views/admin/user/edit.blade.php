@extends('admin.index')
@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Create new user</h3>
            <a href="{{route('user.index')}}" class="btn btn-primary">Back</a> 
        </div>
        <div class="card-body">
            <form action="{{route('user.update', $user->id)}}" method="post">
                @csrf
                @method('PUT')
                <fieldset class="form-fieldset">
                    <div class="mb-3">
                      <label class="form-label required">Full Name</label>
                      <input type="text" class="form-control" autocomplete="off" name="name" value="{{$user->name}}"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Email</label>
                        <input type="text" class="form-control" autocomplete="off" name="email" value="{{$user->email}}"/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label required">Password</label>
                        <input type="password" class="form-control" autocomplete="off" name="password" value="{{$user->password}}"/>
                      </div>
                  </fieldset>
                  <div class="d-flex justify-content-center">
                    <button class="btn btn-primary">Update</button> 
                  </div>
            </form>
        </div>
    </div>
      
</div>
@endsection