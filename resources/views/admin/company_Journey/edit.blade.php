@extends('admin.layout.master')

@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Edit Product</h5>

                <form id="ckeditor" action="{{ route('admin.Company_Journey.update', $companyJourney->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label for="WhyChooseTitle" class="col-sm-3 col-form-label">Why Choose Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="WhyChooseTitle" class="form-control" id="WhyChooseTitle"
                                value="{{ old('WhyChooseTitle', $companyJourney->WhyChooseTitle) }}" required>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="WhyChooseDescription" class="col-sm-3 col-form-label">Why Choose Description</label>
                        <div class="col-sm-9">
                            <textarea name="WhyChooseDescription" class="form-control" id="WhyChooseDescription" rows="4">{{ old('WhyChooseDescription', $companyJourney->WhyChooseDescription) }}</textarea>
                        </div>
                    </div>


                    <!-- Image Upload whychooseImage -->
                    <div class="mb-3 row">
                        <label for="whyChooseImage" class="col-sm-3 col-form-label">why Choose Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="whyChooseImage" class="form-control" id="whyChooseImage" accept="image/*">
                            @if($companyJourney->whyChooseImage)
                            <img src="{{ asset('CompanyJourny/' . $companyJourney->whyChooseImage) }}"
                                alt="Current Image" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="OurMission" class="col-sm-3 col-form-label">Our Mission</label>
                        <div class="col-sm-9">
                            <textarea name="OurMission" class="form-control" id="OurMission" rows="3" required>{{ old('OurMission', $companyJourney->OurMission) }}</textarea>
                        </div>
                    </div>




                    <div class="mb-3 row">
                        <label for="OurVision" class="col-sm-3 col-form-label">Our Mission</label>
                        <div class="col-sm-9">
                            <textarea name="OurVision" class="form-control" id="OurVision" rows="3" required>{{ old('OurVision', $companyJourney->OurVision) }}</textarea>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="OurValuesTitle" class="col-sm-3 col-form-label">Our Values Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="OurValuesTitle" class="form-control" id="OurValuesTitle"
                                value="{{ old('OurValuesTitle', $companyJourney->OurValuesTitle) }}" required>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="OurValuesDescription" class="col-sm-3 col-form-label">Our Values Description</label>
                        <div class="col-sm-9">
                            <textarea name="OurValuesDescription" class="form-control" id="OurValuesDescription" rows="4" required>{{ old('OurValuesDescription', $companyJourney->OurValuesDescription) }}</textarea>
                        </div>
                    </div>

                    <!-- Image Upload  OurValuesImage-->
                    <div class="mb-3 row">
                        <label for="OurValuesImage" class="col-sm-3 col-form-label">Our Values Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="OurValuesImage" class="form-control" id="OurValuesImage" accept="image/*">
                            @if($companyJourney->OurValuesImage)
                            <img src="{{ asset('CompanyJourny/' . $companyJourney->OurValuesImage) }}"
                                alt="Current Image" width="120" class="mt-2 rounded">
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="OurServicetitle1" class="col-sm-3 col-form-label">Our Service title 1</label>
                        <div class="col-sm-9">
                            <input type="text" name="OurServicetitle1" class="form-control" id="OurServicetitle1"
                                value="{{ old('OurServicetitle1', $companyJourney->OurServicetitle1) }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="OurServiceDescription1" class="col-sm-3 col-form-label">Our Service Description 1</label>
                        <div class="col-sm-9">

                            <textarea name="OurServiceDescription1" class="form-control" id="OurServiceDescription1" rows="4" required>{{ old('OurServiceDescription1', $companyJourney->OurServiceDescription1) }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="OurServicetitle2" class="col-sm-3 col-form-label">Our Service title 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="OurServicetitle2" class="form-control" id="OurServicetitle2"
                                value="{{ old('OurServicetitle2', $companyJourney->OurServicetitle2) }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="OurServiceDescription2" class="col-sm-3 col-form-label">Our Service Description 2</label>
                        <div class="col-sm-9">

                            <textarea name="OurServiceDescription2" class="form-control" id="OurServiceDescription2" rows="4" required>{{ old('OurServiceDescription2', $companyJourney->OurServiceDescription2) }}</textarea>

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="OurServicetitle3" class="col-sm-3 col-form-label">Our Service title 3</label>
                        <div class="col-sm-9">
                            <input type="text" name="OurServicetitle3" class="form-control" id="OurServicetitle3"
                                value="{{ old('OurServicetitle3', $companyJourney->OurServicetitle3) }}" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="OurServiceDescription3" class="col-sm-3 col-form-label">Our Service Description 3</label>
                        <div class="col-sm-9">

                            <textarea name="OurServiceDescription3" class="form-control" id="OurServiceDescription3" rows="4" required>{{ old('OurServiceDescription3', $companyJourney->OurServiceDescription3) }}</textarea>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>


                @error('WhyChooseTitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('WhyChooseDescription')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('whyChooseImage')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('OurMission')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('OurVision')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('OurValuesTitle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('OurValuesDescription')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('OurValuesImage')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                @error('OurServicetitle1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('OurServiceDescription1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('OurServicetitle2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @error('OurServiceDescription2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('OurServicetitle3')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('OurServiceDescription3')
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