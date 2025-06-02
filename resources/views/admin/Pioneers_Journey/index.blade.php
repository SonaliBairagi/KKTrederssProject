@extends('admin.layout.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Pioneers Journey</h6>
                    <a href="{{ route('admin.Pioneers_Journey.add') }}" class="btn btn-secondary btn-sm">Add</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title 1</th>
                                <th scope="col">Description 1</th>
                                <th scope="col">Image 1</th>
                                <th scope="col">Title 2</th>
                                <th scope="col">Description 2</th>
                                <th scope="col">Image 2</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($PioneersJourneys as $PioneersJourney)
                            <tr>
                                <th scope="row"></th>
                                <td>{{ $PioneersJourney->title1 }}</td>
                                <td>{!! $PioneersJourney->description1 !!}</td>
                                <td>
                                    @if($PioneersJourney->image1)
                                    <img src="{{ asset('PioneersJourny/' . $PioneersJourney->image1) }}" alt="Image 1" width="100">
                                    @else
                                    No Image
                                    @endif
                                </td>
                                <td>{{ $PioneersJourney->title2 }}</td>
                                <td>{!! $PioneersJourney->description2 !!}</td>
                                <td>
                                    @if($PioneersJourney->image2)
                                    <img src="{{ asset('PioneersJourny/' . $PioneersJourney->image2) }}" alt="Image 2" width="100">
                                    @else
                                    No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.Pioneers_Journey.edit', $PioneersJourney->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.Pioneers_Journey.destroy', $PioneersJourney->id) }}" method="POST">
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