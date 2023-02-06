@extends('admin.role-permission.layouts.master')

@section('title')
<title>Admin/Role-permissions Create</title>
@endsection

@section('content')
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Create Role <a href="{{ route('admin.role.index') }}" class="btn btn-danger rounded-circle" style="float: right;" title="Back"> <i class="fas fa-times"></i> </a></h1>
                        </div>
                        <form action="{{ route('admin.role.store') }}" method="POST" enctype='multipart/form-data'>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" class="form-control" name="name" placeholder="Role name" value="{{ old('name') }}" required>
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for=""> Permission</label>
                                        @foreach ($allPermissions as $permission)
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label for="{{$permission->id}}" style="align-self: right">{{ ucwords(str_replace("-", " ", $permission->name)) }} :  </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <label class="switch">
                                                            <input type="checkbox" id="{{$permission->id}}" name="permissions[]" value="{{$permission->name}}">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('permissions') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection