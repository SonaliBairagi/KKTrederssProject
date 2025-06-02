@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Home Carousal</h5>
                <form id="homeCarousal" action="{{ route('admin.Home_carousal.update', $home_carousal->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Title 1 -->
                    <div class="mb-3 row">
                        <label for="title1" class="col-sm-3 col-form-label">Title 1</label>
                        <div class="col-sm-9">
                            <input type="text" name="title1" class="form-control" id="title1" value="{{ old('title1', $home_carousal->title1) }}" required>
                        </div>
                    </div>

                    <!-- Title 2 -->
                    <div class="mb-3 row">
                        <label for="title2" class="col-sm-3 col-form-label">Title 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="title2" class="form-control" id="title2" value="{{ old('title2', $home_carousal->title2) }}" required>
                        </div>
                    </div>

                    <!-- Description 1 -->
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-3 col-form-label">Description 1</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" id="description" rows="3" required>{{ old('description', $home_carousal->description) }}</textarea>
                        </div>
                    </div>

                    <!-- Title 3 -->
                    <div class="mb-3 row">
                        <label for="title3" class="col-sm-3 col-form-label">Title 3</label>
                        <div class="col-sm-9">
                            <input type="text" name="title3" class="form-control" id="title3" value="{{ old('title3', $home_carousal->title3) }}" required>
                        </div>
                    </div>



                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="image" accept="image/*">
                            @if($home_carousal->image)
                            <img src="{{ asset('HomeCarousal/'.$home_carousal->image) }}" alt="Current Image" width="120" class="mt-2 rounded">

                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>

                <!-- Validation Errors -->
                @error('title1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('title2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('title3')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection


@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let ckEditorInstance;

    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            ckEditorInstance = editor;
        })
        .catch(error => {
            console.error(error);
        });

    document.querySelector('#homeCarousal').addEventListener('submit', function(e) {
        if (ckEditorInstance) {
            document.querySelector('#description').value = ckEditorInstance.getData();
        }
    });
</script>

<style>
    .ck-editor__editable {
        min-height: 200px;
    }
</style>
@endsection