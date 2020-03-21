@extends('backend.admin.index')

@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="float-right ml-2">
                    <a href="#">View all</a>
                </div>
                <h5 class="header-title mb-4">Latest Transaction</h5>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        @foreach ($updates as $update)
                            <thead>
                                <tr>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Excerpt</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <a href="#"># {{ $update->id }}</a>
                                    </th>
                                    <td>{{ $update->title }}</td>
                                    <td>{{ $update->excerpt }}</td>
                                    <td>
                                        {{ $update->body }}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="mdi mdi-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                </div>

                <div class="mt-4">
                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="mdi mdi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="mdi mdi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
