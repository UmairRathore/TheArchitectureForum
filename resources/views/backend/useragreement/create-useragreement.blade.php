@extends('layouts.backend.master')

@section('privacy')

    <!-- Main User Agreement -->
    <main class="body-privacy">
        <!-- Navigation Bar -->
        <!-- Body User Agreement Wrapper -->
        <div class="ms-privacy-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ps-0">
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.privacy-policy-list')}}"> User Agreement List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add User Agreement</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add  User Agreement</h6>
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
                            <div class="card">
                                <div class="card-header">
                                    Create User Agreement
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.store-user-agreement') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-6">
                                                <label for="description">User Agreement</label>
                                                <textarea name="description" id="description"  class="form-control form-control-lg @error('description') is-invalid @enderror" placeholder="Enter User Agreement Policy">{{ old('description') }}</textarea>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save User Agreement</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <!-- Initialize CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });

    </script>

@endsection

