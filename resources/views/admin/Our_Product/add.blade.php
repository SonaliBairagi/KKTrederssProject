@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Add Our Products Items</h5>
                <form id="ckeditor" action="{{ route('admin.Our_Product.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <!-- Product No Field -->
                    <div class="mb-3 row">
                        <label for="Oproduct_no" class="col-sm-3 col-form-label">Product No</label>
                        <div class="col-sm-9">
                            <input type="text" name="Oproduct_no" class="form-control" id="Oproduct_no" placeholder="Enter product number" required>
                        </div>
                    </div>

                    <!-- Name Field -->
                    <div class="mb-3 row">
                        <label for="Oproduct_name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="Oproduct_name" class="form-control" id="Oproduct_name" placeholder="Enter name" required>
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-3 row">
                        <label for="Oproduct_description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="Oproduct_description" class="form-control" id="Oproduct_description" rows="3" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="Oproduct_img" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="Oproduct_img" class="form-control" id="Oproduct_img" accept="image/*" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>


                @error('Oproduct_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('Oproduct_description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('Oproduct_img')
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