@extends('app')
@section('content')
    <section class="section-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-0 rounded p-3 text-white" style="background: rgba(76, 69, 154, 1);">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title">Project List</h6>
                            <a href="{{ route('project-list.create') }}" class="btn btn-info">Add Project</a>
                        </div>
                        <div class="card-body">
                            <table class="table-sm table-bordered table-striped" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Project Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $key => $project)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $project->project_name }}</td>
                                            <td>{{ $project->sort ?? '-' }}</td>
                                            <td>
                                                @if ($project->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    @foreach ($project->images as $image)
                                                        <div class="m-2 border rounded p-2">
                                                            <img src="{{ asset($image->image_path) }}" class="img-fluid pb-2" alt="Image" style="width: 100px;">
                                                            <form method="POST" action="{{ route('project.delete.image', ['projectId' => $project->id, 'imageId' => $image->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success" title="Edit" href="{{ route('project-list.edit', $project->id) }}"><i class="iconoir-edit"></i></a>
                                                {{-- <a class="btn btn-sm btn-danger" title="Edit" href="#" onclick="remove({{ $item->id }}, event, $(this))"><i class="fa fa-trash"></i></a> --}}
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
    </section>
@endsection
