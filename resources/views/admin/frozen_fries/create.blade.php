@extends('admin.layout.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Add Frozen Frize Items</h6>
                    <a href="{{ route('admin.frozen_fries.add')}}" class="btn btn-secondary btn-sm">Add</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fries Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Fproducts as $Fproduct)
                            <tr>

                                <th scope="row">{{ $Fproduct->product_no }}</th>
                                <td>{{ $Fproduct->product_name }}</td>
                                <td>{!! $Fproduct->product_description !!}</td>


                                <td>
                                    <img src="{{ asset('Fproducts/' . $Fproduct->product_img) }}" alt="frenchfries" width="90">
                                </td>


                                <td><a href="{{ route('admin.frozenfrize.edit', $Fproduct->id) }}" class="btn btn-primary">Edit</a></td>

                                <td>
                                    <form action="{{ route('admin.frozenfrize.destroy', $Fproduct->id) }}" method="POST">
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