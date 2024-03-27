@extends('app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-0 rounded p-4" style="background: #1c3150;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Edit Your Project</h5>
                            <form method="POST" action="{{ route('project-list.update', $project->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="project_name" class="form-label">Project Name</label>
                                    <input type="text" class="form-control @error('project_name') is-invalid @enderror" id="project_name" name="project_name" value="{{ $project->project_name }}" required>
                                    @error('project_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" required>{{ $project->short_description }}</textarea>
                                    @error('short_description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="long_description" class="form-label">Long Description</label>
                                    <textarea class="form-control @error('long_description') is-invalid @enderror" id="long_description" name="long_description" rows="5" required>{{ $project->long_description }}</textarea>
                                    @error('long_description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="images" class="form-label">Multiple Images</label>
                                    <input type="file" class="form-control @error('images.*') is-invalid @enderror" id="images" name="images[]" multiple required>
                                    <div id="image-preview" class="mt-3"></div>
                                    @error('images.*')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="skill_tags" class="form-label">Skill Tags</label>
                                    <input type="text" class="form-control" id="skill_tags" name="skill_tags" value="{{ $project->tags->implode('name', ', ') }}" required>
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
@endsection
