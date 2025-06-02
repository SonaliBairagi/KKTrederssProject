@extends('admin.layout.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0"> Our Veggie Specialties</h6>
                    <a href="{{ route('admin.VeggieSpecialties.add') }}" class="btn btn-secondary btn-sm">Add</a>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($veggieSpecialtiess as $veggieSpecialties)
                            <tr>
                                <th scope="row"></th>
                                <th>{{ $veggieSpecialties->VSproduct_no }}</th>
                                <td>{{ $veggieSpecialties->VSproduct_name }}</td>
                                <td>{!! $veggieSpecialties->VSproduct_description !!}</td>

                                <td>
                                    <img src="{{ asset('veggieSpecialties/' . $veggieSpecialties->VSproduct_img) }}" alt="veggieSpecialties" width="90">
                                </td>

                                <td><a href="{{ route('admin.VeggieSpecialties.edit', $veggieSpecialties->id) }}" class="btn btn-primary">Edit</a></td>

                                <td>
                                    <form action="{{ route('admin.VeggieSpecialties.destroy', $veggieSpecialties->id) }}" method="POST">
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