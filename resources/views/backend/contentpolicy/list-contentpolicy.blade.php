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
                            <li class="breadcrumb-item active" aria-current="page">Content And Policy</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Privacy</h6>
                            <a href="{{route('backend.add-content-policy')}}" class="btn btn-primary">Content And Policy </a>
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
                                    <th>description</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @isset($contentpolicy)
                                        @foreach ($contentpolicy as $item)

                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>
                                                    <a class="fa fa-edit" href="{{ route('backend.edit-content-policy',$item->id) }}">Edit description</a>
                                                    <a class="fas fa-trash alt" href="{{ route('backend.delete-content-policy',$item->id) }}">Delete description</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
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


