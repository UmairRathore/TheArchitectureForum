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
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.faq-list')}}"> Faq List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Faq </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Edit Faq</h6>
                        </div>
                        <div class="ms-panel-body">
                            @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}</p>
                            @endif
                            @if(Session('required_fields_empty'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session('required_fields_empty')}}

                                </div>
                            @endif



                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <form method="POST" action="{{ route('backend.update-faq', $faq->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-md-6 mb-3">
                                    <label for="title">Title</label>
                                    <div class="input-group">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$faq->title}}" placeholder="Enter Title" >
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-6">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" placeholder="Enter Description">{{ $faq->description }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
