@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Edit Pioneers Journey</h5>

                <form action="{{ route('admin.Pioneers_Journey.update', $PioneersJourney->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Title 1 -->
                    <div class="mb-3 row">
                        <label for="title1" class="col-sm-3 col-form-label">Title 1</label>
                        <div class="col-sm-9">
                            <input type="text" name="title1" class="form-control" id="title1"
                                value="{{ old('title1', $PioneersJourney->title1) }}" required>
                            @error('title1')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Description 1 -->
                    <div class="mb-3 row">
                        <label for="description1" class="col-sm-3 col-form-label">Description 1</label>
                        <div class="col-sm-9">
                            <textarea name="description1" class="form-control" id="description1" rows="3" required>{{ old('description1', $PioneersJourney->description1) }}</textarea>
                            @error('description1')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Image 1 -->
                    <div class="mb-3 row">
                        <label for="image1" class="col-sm-3 col-form-label">Image 1</label>
                        <div class="col-sm-9">
                            <input type="file" name="image1" class="form-control" id="image1" accept="image/*">
                            @if($PioneersJourney->image1)
                            <img src="{{ asset('PioneersJourny/'.$PioneersJourney->image1) }}" alt="Current Image 1" width="120" class="mt-2 rounded">
                            @endif
                            @error('image1')
                            <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Title 2 -->
                    <div class="mb-3 row">
                        <label for="title2" class="col-sm-3 col-form-label">Title 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="title2" class="form-control" id="title2"
                                value="{{ old('title2', $PioneersJourney->title2) }}" required>
                            @error('title2')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Description 2 -->
                    <div class="mb-3 row">
                        <label for="description2" class="col-sm-3 col-form-label">Description 2</label>
                        <div class="col-sm-9">
                            <textarea name="description2" class="form-control" id="description2" rows="3" required>{{ old('description2', $PioneersJourney->description2) }}</textarea>
                            @error('description2')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="mb-3 row">
                        <label for="image2" class="col-sm-3 col-form-label">Image 2</label>
                        <div class="col-sm-9">
                            <input type="file" name="image2" class="form-control" id="image2" accept="image/*">
                            @if($PioneersJourney->image2)
                            <img src="{{ asset('PioneersJourny/'.$PioneersJourney->image2) }}" alt="Current Image 2" width="120" class="mt-2 rounded">
                            @endif
                            @error('image2')
                            <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>

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