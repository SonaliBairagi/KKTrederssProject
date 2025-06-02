@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Pioneers Journey</h5>
                <form id="ckeditor" action="{{ route('admin.Pioneers_Journey.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <!-- Name Field -->
                    <div class="mb-3 row">
                        <label for="title1" class="col-sm-3 col-form-label">Title 1</label>
                        <div class="col-sm-9">
                            <input type="text" name="title1" class="form-control" id="title1" placeholder="Enter name" required>
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-3 row">
                        <label for="description1" class="col-sm-3 col-form-label">Description 1</label>
                        <div class="col-sm-9">
                            <textarea name="description1" class="form-control" id="description1" rows="3" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="image1" class="col-sm-3 col-form-label">Image 1</label>
                        <div class="col-sm-9">
                            <input type="file" name="image1" class="form-control" id="image1" accept="image/*" required>
                        </div>
                    </div>


                    <!-- Name Field 2-->
                    <div class="mb-3 row">
                        <label for="title2" class="col-sm-3 col-form-label">Title 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="title2" class="form-control" id="title2" placeholder="Enter name" required>
                        </div>
                    </div>

                    <!-- Description Field  2-->
                    <div class="mb-3 row">
                        <label for="description2" class="col-sm-3 col-form-label">Description 2</label>
                        <div class="col-sm-9">
                            <textarea name="description2" class="form-control" id="description2" rows="3" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Image Upload 2  -->
                    <div class="mb-3 row">
                        <label for="image2" class="col-sm-3 col-form-label">Image 2</label>
                        <div class="col-sm-9">
                            <input type="file" name="image2" class="form-control" id="image2" accept="image/*" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>


                @error('Hproduct_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('Hproduct_description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('Hproduct_img')
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