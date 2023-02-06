<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin/Role-permissions Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
    {{-- sweetalert2 css --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}"/>
    {{-- toastr css --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/toastr/toastr.min.css') }}"/>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Role List
                                @can('role-create', 'admin')
                                <a href="{{ route('admin.role.create') }}" class="btn btn-primary" style="float: right; border: 1px solid white"><i class="fas fa-plus"></i> New Role</a>
                                @endcan
                            </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover" id="role_table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Role name</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $roles as $key => $role)
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{ ucwords(str_replace("-", " ", $role->name)) }}</td>
                                            @php
                                                $data = $role->permissions->pluck('name')->toArray();
                                                $permission = implode(', ', $data);
                                            @endphp
                                            <td>{{ $permission }}</td>
                                            <td>
                                                @can('role-edit', 'admin')
                                                    <a class='btn btn-warning rounded-circle' href="{{ route('admin.role.edit', ['id'=>$role->id]) }}"> <i class="fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i> </a>
                                                @endcan
                                                @can('role-delete', 'admin')
                                                    <a class='btn btn-danger rounded-circle' onclick='deleteRole({{ $role->id }})' href='javascript:void(0)'> <i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i> </a>
                                                @endcan
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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- sweetalert2 js --}}
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    {{-- toastr js --}}
    <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>

    <script>
        function deleteRole(id){
            var token = $("meta[name='csrf-token']").attr("content");

            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.role.destroy') }}",
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (response){
                            console.log(response);
                            if (response == "success") {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'This role is assigned to user, You cannot delete it!',
                                })
                            }
                            location.reload();
                        }
                    });
                }
            })
        }
    </script>
</body>
</html>
