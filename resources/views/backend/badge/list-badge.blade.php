@extends('layouts.backend.master')

@section('content')

    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ps-0">
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i>
                                    Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Badge List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Badge List</h6>
                            <a href="{{route('backend.add-badge')}}" class="btn btn-primary">Add Badge </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>
                                @endif

                                <table id="datatable" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>About Image</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($badges as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                @if ($item->badge_image && file_exists(storage_path($item->badges_image)))
                                                    <img src="{{ asset($item->badge_image) }}" alt="badge Profile" style="max-width: 100px;">
                                                @else
                                                    <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="badge Profile" style="max-width: 100px;">
                                                @endif
                                            </td>
                                            <td>
                                                <a class="fas fa-pencil-alt" href="{{ route('backend.edit-badge', $item->id) }}"></a>
                                                <a class="fas fa-trash-alt" href="{{ route('backend.delete-badge', $item->id) }}"></a>
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

        </div>
    </main>

@endsection
@section('librarylist')

    <script>
        $('#inputStateRes').on('change', function () {
            if (this.value == 'Active') {
                $(".dataTable").DataTable().column(9).search('Active').draw();
            } else if (this.value == 'InActive') {
                $(".dataTable").DataTable().column(9).search('false').draw();
            } else if (this.value == 'All') {
                $(".dataTable").DataTable().column(9).search('').draw();
            } else {
                $(".datatable").DataTable().search(this.value).draw();
            }
        });
    </script>
@endsection

