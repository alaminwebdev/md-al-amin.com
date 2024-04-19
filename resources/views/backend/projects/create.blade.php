@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>
        ul,
        ol {
            list-style: inherit;
            margin: inherit;
            padding: inherit;
        }
        .note-editor {
            background-color: #ffffff !important;
        }
    </style>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-0 rounded" style="background: #1c315047;">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Add Your Project</h5>
                            <a href="{{ route('project-list.index') }}" class="btn btn-sm btn-info">Project List</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('project-list.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="project_name" class="form-label">Project Name</label>
                                    <input type="text" class="form-control @error('project_name') is-invalid @enderror" id="project_name" name="project_name" value="{{ old('project_name') }}" required>
                                    @error('project_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="live_url" class="form-label">Live URL</label>
                                    <input type="text" class="form-control @error('live_url') is-invalid @enderror" id="live_url" name="live_url" value="{{ old('live_url') }}" required>
                                    @error('live_url')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="test_url" class="form-label">Test URL</label>
                                    <input type="text" class="form-control @error('test_url') is-invalid @enderror" id="test_url" name="test_url" value="{{ old('test_url') }}" required>
                                    @error('test_url')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="host_link" class="form-label">Host Link</label>
                                    <input type="text" class="form-control @error('host_link') is-invalid @enderror" id="host_link" name="host_link" value="{{ old('host_link') }}" required>
                                    @error('host_link')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" required>{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="long_description" class="form-label">Long Description</label>
                                    <textarea class="form-control bg-white @error('long_description') is-invalid @enderror" id="long_description" name="long_description"  required>{{ old('long_description') }}</textarea>
                                    @error('long_description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="images" class="form-label">Multiple Images</label>
                                    <input type="file" class="form-control @error('images.*') is-invalid @enderror" id="images" name="images[]" multiple>
                                    <div id="image-preview" class="mt-3"></div>
                                    @error('images.*')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="skill_tags" class="form-label">Skill Tags</label>
                                    <input type="text" class="form-control" id="skill_tags" name="skill_tags" required>
                                    <div id="skill-tags-preview" class="mt-3"></div>
                                </div>

                                <button type="submit" class="btn btn-sm theme-btn">Upload Project</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('images').addEventListener('change', function(event) {
            var preview = document.getElementById('image-preview');
            preview.innerHTML = '';
            var files = event.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '100px'; // Adjust the size of the preview images
                    img.style.marginRight = '10px';
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('skill_tags').addEventListener('input', function(event) {
            var input = event.target;
            var tags = input.value.split(',').map(function(tag) {
                return tag.trim();
            }).filter(function(tag) {
                return tag !== '';
            });
            var preview = document.getElementById('skill-tags-preview');
            preview.innerHTML = '';
            tags.forEach(function(tag) {
                var span = document.createElement('span');
                span.className = 'badge bg-secondary';
                span.style.marginRight = '5px';
                span.textContent = tag;
                preview.appendChild(span);
            });
        });
    </script>

    <script>
        $('#long_description').summernote({
            placeholder: 'Write your project description',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
