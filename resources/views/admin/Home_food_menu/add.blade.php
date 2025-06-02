@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Add Hash Brown Items</h5>
                <form action="{{ route('admin.Home_food_menu.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="FoodMenuImage" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="FoodMenuImage" class="form-control" id="FoodMenuImage" accept="image/*" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>



                @error('HFproduct_img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection