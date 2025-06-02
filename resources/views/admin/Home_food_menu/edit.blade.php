@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Edit Product</h5>

                <form action="{{ route('admin.Home_food_menu.update', $HomeFoodMenuProduct->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="FoodMenuImage" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="FoodMenuImage" class="form-control" id="FoodMenuImage" accept="image/*">

                            @if($HomeFoodMenuProduct->FoodMenuImage)
                            <img src="{{ asset('HomeFoodProducts/' . $HomeFoodMenuProduct->FoodMenuImage) }}" alt="Current Image" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>

                @error('FoodMenuImage')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror

            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection