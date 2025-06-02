@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Add Home About Us</h5>
                <form id="ckeditor" action="{{ route('admin.Home_about_us.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <!-- Title 1 -->
                    <div class="mb-3 row">
                        <label for="title1" class="col-sm-3 col-form-label">Title 1</label>
                        <div class="col-sm-9">
                            <input type="text" name="title1" class="form-control" id="title1" placeholder="Enter product number" required>
                        </div>
                    </div>

                    <!-- Title 2 -->
                    <div class="mb-3 row">
                        <label for="title2" class="col-sm-3 col-form-label">Title 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="title2" class="form-control" id="title2" placeholder="Enter name" required>
                        </div>
                    </div>

                    <!-- Description 1 Field -->
                    <div class="mb-3 row">
                        <label for="description1" class="col-sm-3 col-form-label">description 1</label>
                        <div class="col-sm-9">
                            <textarea name="description1" class="form-control" id="description1" rows="3" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Title 3-->
                    <div class="mb-3 row">
                        <label for="title3" class="col-sm-3 col-form-label">Title 3</label>
                        <div class="col-sm-9">
                            <input type="text" name="title3" class="form-control" id="title3" placeholder="Enter name" required>
                        </div>
                    </div>

                    <!-- Description 2 Field -->
                    <div class="mb-3 row">
                        <label for="description2" class="col-sm-3 col-form-label">description 2</label>
                        <div class="col-sm-9">
                            <textarea name="description2" class="form-control" id="description2" rows="3" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>


                @error('title1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('title2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('title3')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('description1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('description2')
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