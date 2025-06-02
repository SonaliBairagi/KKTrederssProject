@extends('admin.layout.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Home About Us</h6>
                    <a href="{{ route('admin.Home_about_us.add') }}" class="btn btn-secondary btn-sm">Add</a>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title 1</th>
                                <th scope="col">Title 2</th>
                                <th scope="col">Title 3</th>
                                <th scope="col">Description 1</th>
                                <th scope="col">Description 2</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($homeaboutuss as $homeaboutus)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $homeaboutus->title1 }}</td>
                                <td>{{ $homeaboutus->title2 }}</td>
                                <td>{{ $homeaboutus->title3 }}</td>
                                <th scope="row">{!! $homeaboutus->description1 !!}</th>
                                <td>{!! $homeaboutus->description2 !!}</td>
                                <td>
                                    <img src="{{ asset('homeaboutus/' . $homeaboutus->image) }}" alt="Hash Brown" width="90">
                                </td>

                                <td><a href="{{ route('admin.Home_about_us.edit', $homeaboutus->id) }}" class="btn btn-primary">Edit</a></td>

                                <td>
                                    <form action="{{ route('admin.Home_about_us.destroy', $homeaboutus->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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

@endsection