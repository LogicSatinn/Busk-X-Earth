@extends('layouts.backend')

@section('title')

   Users

@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Users </h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                    <label for="reportrange" class="sr-only">Date Ranges</label>
                                    <div id="reportrange" class="px-2 py-2 text-muted">
                                        <span class="small"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm"><span
                                            class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                    <button type="button" class="btn btn-sm mr-2"><span
                                            class="fe fe-filter fe-16 text-muted"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- table -->
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-borderless table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joining Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($users as $user)
                                <tbody>
                                <tr>
                                    <td class="mb-0 text-muted">{{ $i++ }}</td>
                                    <td>
                                        <p class="mb-0 text-muted"><strong>{{$user->name}}</strong></p>
                                    </td>
                                    <td>
                                        <p class="mb-0 ">{{$user->email}}</p>
                                    </td>
                                    <td>{{$user->created_at}}</td>
                                    <form action="{{route('users.destroy', $user)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button type="submit" class="dropdown-item" href="#">Remove</button>
                                        </div>
                                    </td>
                                    </form>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
