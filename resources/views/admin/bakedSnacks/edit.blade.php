@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Edit Product</h5>

                <form id="ckeditor" action="{{ route('admin.BakedSnacks.update', $BakedSnacks->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Product No Field -->
                    <div class="mb-3 row">
                        <label for="BSproduct_no" class="col-sm-3 col-form-label">Product No</label>
                        <div class="col-sm-9">
                            <input type="text" name="BSproduct_no" class="form-control" id="BSproduct_no"
                                value="{{ old('BSproduct_no', $BakedSnacks->BSproduct_no) }}" required>
                        </div>
                    </div>

                    <!-- Name Field -->
                    <div class="mb-3 row">
                        <label for="BSproduct_name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="BSproduct_name" class="form-control" id="BSproduct_name"
                                value="{{ old('BSproduct_name', $BakedSnacks->BSproduct_name) }}" required>
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-3 row">
                        <label for="BSproduct_description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="BSproduct_description" class="form-control" id="BSproduct_description"
                                rows="3" required>{{ old('BSproduct_description', $BakedSnacks->BSproduct_description) }}</textarea>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="BSproduct_img" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="BSproduct_img" class="form-control" id="BSproduct_img" accept="image/*">
                            @if($BakedSnacks->BSproduct_img)
                            <img src="{{ asset('BakedSnacks/'.$BakedSnacks->BSproduct_img) }}" alt="Current Image" width="120" class="mt-2 rounded">

                            @endif
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>

                @error('BSproduct_no')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('BSproduct_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('BSproduct_description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('BSproduct_img')
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
    const editors = {};

    document.addEventListener('DOMContentLoaded', () => {
        // Select all textarea elements
        document.querySelectorAll('textarea').forEach((textarea) => {
            ClassicEditor
                .create(textarea)
                .then(editor => {
                    editors[textarea.name] = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        });

        // Sync editor content on form submit
        document.querySelector('#ckeditor').addEventListener('submit', function(e) {
            for (const name in editors) {
                const editor = editors[name];
                const textarea = document.querySelector(`[name="${name}"]`);
                if (textarea) {
                    textarea.value = editor.getData();
                }
            }
        });
    });
</script>

<style>
    .ck-editor__editable {
        min-height: 200px;
    }
</style>
@endsection