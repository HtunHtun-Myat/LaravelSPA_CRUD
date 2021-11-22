<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="_token" content="{!! csrf_token() !!}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <title>Laravel SPA</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <button class="btn btn-primary" data-toggle="modal" data-target="#create-user-modal">Create</button>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Search..." />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                            <td>
                                <div class="actions">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#edit-user-modal">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger ml-2" data-toggle="modal"
                                        data-target="#delete-user-modal">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                {{ $users->links() }}
                {{-- <nav class="mt-5">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
            <!-- .col-12 -->
        </div>
    </div>

    <!-- Create User Modal-->
    @include('_create')
    <!-- End: Create User Modal-->

    <!-- Edit User Modal-->
    @include('_edit')
    <!-- End: Edit User Modal-->

    <!-- Delete User Modal-->
    @include('_delete')
    <!-- End: Delete User Modal-->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="/user/user.js"></script>
</body>

</html>