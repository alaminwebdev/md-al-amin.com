@extends('app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card border-0 rounded p-4" style="background: #1c3150;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Project List</h5>
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
                                            <td>
                                                @foreach ($project->images as $image)
                                                    <div>
                                                        <img src="{{ asset($image->image_path) }}" alt="Image">
                                                        <form method="POST" action="{{ route('project.delete.image', ['id' => $project->id, 'image_id' => $image->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">Delete</button>
                                                        </form>
                                                    </div>
                                                @endforeach
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
