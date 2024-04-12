@extends('admin.index')
@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Table User
            </h2>
          </div>
          <div class="col-auto ms-auto">
            <div class="btn-list">
              <a href="{{ route('user.create')}}" class="btn btn-primary d-none d-sm-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <line x1="12" y1="5" x2="12" y2="19" />
                  <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                Create new user
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="card-body">
            <div id="table-default" class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th><button class="table-sort" data-sort="sort-name">ID</button></th>
                    <th><button class="table-sort" data-sort="sort-city">Name</button></th>
                    <th><button class="table-sort" data-sort="sort-type">Email</button></th>
                    <th><button class="table-sort" data-sort="sort-type">Action</button></th>
                  </tr>
                </thead>
                <tbody class="table-tbody">
                    @foreach($users as $u)
                  <tr>
                    <td class="sort-name">{{$u->id}}</td>
                    <td class="sort-city">{{$u->name}}</td>
                    <td class="sort-type">{{$u->email}}</td>
                    <td class="sort-type d-flex">
                        <a href="{{route('user.edit', $u->id)}}" class="btn btn-light me-1">Sửa</a>
                        <form action="{{route('user.destroy', $u->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-light"onclick="return confirm('Are you sure you want to delete this?')">Xóa</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection