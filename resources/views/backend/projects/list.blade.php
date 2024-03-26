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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($ho_activity_events as $key => $item)
                                        <tr class="{{ $item->id }} tr-row">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-success" title="Edit" href="{{ route('ho-activity-events.edit', $item->id) }}"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" title="Edit" href="#" onclick="remove({{ $item->id }}, event, $(this))"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
