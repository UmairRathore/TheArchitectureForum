@extends('layouts.frontend.app')

@section('content')
    <style>

        .pdf-container {
            height: 500px; /* Set a fixed height for the container */
            overflow-y: auto; /* Enable vertical scrolling */
            border: 1px solid #ccc; /* Add border for better visibility */
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1); /* Add shadow for depth effect */
        }#pdfViewer {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .page-wrapper {
            width: 45%; /* Adjust width as needed */
            margin-bottom: 20px;
        }

        canvas {
            width: 100%;
            border: 1px solid #ccc; /* Add border for better visibility */
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1); /* Add shadow for depth effect */
        }
    </style>
    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.partials.left-SideBar')
                    </div>
                </div>
                @if(auth()->user()->id)
                    <div class="col-lg-9">
                        <div class="edit-profile-area">
                            <div class="profile-content d-flex justify-content-between align-items-center">
                                <div class="profile-img">
                                    @if(auth()->user()->image)
                                        <img src="{{asset(auth()->user()->image)}}" alt="Image">
                                    @else
                                        <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                    @endif
                                    <h3>{{auth()->user()->name}}</h3>
                                    <span>{{auth()->user()->created_at}}</span>
                                    {{--                                <span>Last seen this week</span>/--}}
                                    <span>{{auth()->user()->student_or_worker}}</span>
                                    <span>{{auth()->user()->student_or_worker_workplace}}</span>
                                    <span>Country</span>
                                    <button class="followers-btn">45 Followers</button>
                                    <button class="followers-btn">12 Following</button>
                                </div>

                                <div class="edit-btn">
                                    <button id="loadPdfBtn" class="default-btn">Click this to see Portfolio</button>
                                </div>
                            </div>
                        </div>
                        <div class="pdf-container">
                            <div id="pdfViewer"></div>
                            <div class="page-slider">
                                <input type="range" min="1" max="10" value="1" class="slider" id="pageSlider">
                            </div>
                        </div>
                    </div>
                @elseif($user->id != auth()->user()->id)
                    <div class="col-lg-9">
                        <div class="edit-profile-area">
                            <div class="profile-content d-flex justify-content-between align-items-center">
                                <div class="profile-img">
                                    @if($user->image)
                                        <img src="{{asset($user->image)}}" alt="Image">
                                    @else
                                        <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                    @endif
                                    <h3>{{$user->name}}</h3>
                                    <span>{{$user->created_at}}</span>
                                    {{--                                <span>Last seen this week</span>/--}}
                                    <span>{{$user->student_or_worker}}</span>
                                    <span>{{$user->student_or_worker_workplace}}</span>
                                    <span>Country</span>
                                    <button class="followers-btn">45 Followers</button>
                                    <button class="followers-btn">12 Following</button>
                                </div>

                                <div class="edit-btn">
                                    <button id="loadPdfBtn" class="default-btn">Click this to see Portfolio</button>
                                </div>
                            </div>
                        </div>
                        <div class="pdf-container">
                            <div id="pdfViewer"></div>
                            <div class="page-slider">
                                <input type="range" min="1" max="10" value="1" class="slider" id="pageSlider">
                            </div>
                        </div>
                    </div>
            </div>
            @endif
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        const loadPdfBtn = document.getElementById('loadPdfBtn');

        loadPdfBtn.addEventListener('click', function() {
            const url = '{{ asset("/assets/images/portfoliopdf/dummy.pdf") }}';
            const loadingTask = pdfjsLib.getDocument(url);

            loadingTask.promise.then(function(pdf) {
                const viewer = document.getElementById('pdfViewer');
                const pageSlider = document.getElementById('pageSlider');
                const numPages = pdf.numPages;
                let currentPage = 1;

                function renderPage(pageNumber) {
                    pdf.getPage(pageNumber).then(function(page) {
                        const canvasWrapper = document.createElement('div');
                        canvasWrapper.classList.add('page-wrapper');
                        const canvas = document.createElement('canvas');
                        canvasWrapper.appendChild(canvas);
                        viewer.appendChild(canvasWrapper);

                        const viewport = page.getViewport({ scale: 1.5 });
                        const canvasContext = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        const renderContext = {
                            canvasContext,
                            viewport
                        };
                        page.render(renderContext);
                    });
                }

                function renderPages(startPage) {
                    viewer.innerHTML = '';
                    for (let pageNumber = startPage; pageNumber <= numPages && pageNumber < startPage + 2; pageNumber++) {
                        renderPage(pageNumber);
                    }
                }

                renderPages(currentPage);

                const updateSlider = () => {
                    pageSlider.setAttribute('max', numPages);
                    pageSlider.value = currentPage;
                };

                updateSlider();

                pageSlider.addEventListener('input', function() {
                    currentPage = parseInt(pageSlider.value);
                    renderPages(currentPage);
                });
            });
        });
    });


</script>

{{--    loadingTask.promise.then(function(pdf) {--}}
{{--        // Get the total number of pages in the PDF--}}
{{--        const numPages = pdf.numPages;--}}

{{--        // Create a PDF viewer--}}
{{--        const viewer = document.getElementById('pdfViewer');--}}

{{--        // Render each page of the PDF in a booklet format--}}
{{--        for (let pageNumber = 1; pageNumber <= numPages; pageNumber += 2) {--}}
{{--            // Create a canvas element for each pair of pages (booklet format)--}}
{{--            const canvasWrapper = document.createElement('div');--}}
{{--            canvasWrapper.classList.add('page-wrapper');--}}
{{--            const canvas = document.createElement('canvas');--}}
{{--            canvasWrapper.appendChild(canvas);--}}
{{--            viewer.appendChild(canvasWrapper);--}}

{{--            // Render the current page--}}
{{--            pdf.getPage(pageNumber).then(function(page) {--}}
{{--                const viewport = page.getViewport({ scale: 1.5 });--}}
{{--                const canvasContext = canvas.getContext('2d');--}}
{{--                canvas.height = viewport.height;--}}
{{--                canvas.width = viewport.width;--}}

{{--                const renderContext = {--}}
{{--                    canvasContext,--}}
{{--                    viewport--}}
{{--                };--}}
{{--                page.render(renderContext);--}}
{{--            });--}}

{{--            // Render the next page (if it exists)--}}
{{--            if (pageNumber + 1 <= numPages) {--}}
{{--                const nextCanvasWrapper = document.createElement('div');--}}
{{--                nextCanvasWrapper.classList.add('page-wrapper');--}}
{{--                const nextCanvas = document.createElement('canvas');--}}
{{--                nextCanvasWrapper.appendChild(nextCanvas);--}}
{{--                viewer.appendChild(nextCanvasWrapper);--}}

{{--                pdf.getPage(pageNumber + 1).then(function(nextPage) {--}}
{{--                    const viewport = nextPage.getViewport({ scale: 1.5 });--}}
{{--                    const canvasContext = nextCanvas.getContext('2d');--}}
{{--                    nextCanvas.height = viewport.height;--}}
{{--                    nextCanvas.width = viewport.width;--}}

{{--                    const renderContext = {--}}
{{--                        canvasContext,--}}
{{--                        viewport--}}
{{--                    };--}}
{{--                    nextPage.render(renderContext);--}}
{{--                });--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

@endsection
