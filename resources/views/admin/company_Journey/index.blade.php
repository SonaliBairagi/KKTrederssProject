@extends('admin.layout.master')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Company Journey</h6>
                    <a href="{{ route('admin.Company_Journey.add') }}" class="btn btn-secondary btn-sm">Add</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Why Choose Title</th>
                                <th>Why Choose Description</th>
                                <th>Why Choose Image</th>
                                <th>Our Mission</th>
                                <th>Our Vision</th>
                                <th>Our Values Title</th>
                                <th>Our Values Description</th>
                                <th>Our Values Image</th>
                                <th>Service Title 1</th>
                                <th>Service Description 1</th>
                                <th>Service Title 2</th>
                                <th>Service Description 2</th>
                                <th>Service Title 3</th>
                                <th>Service Description 3</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                            @foreach($companyJourneys as $companyJourney)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $companyJourney->WhyChooseTitle }}</td>
                                <td>{!! $companyJourney->WhyChooseDescription !!}</td>
                                <td>
                                    @if($companyJourney->whyChooseImage)
                                    <img src="{{ asset('CompanyJourny/' . $companyJourney->whyChooseImage) }}" alt="Why Choose" width="60">
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>{!! $companyJourney->OurMission !!}</td>
                                <td>{!! $companyJourney->OurVision !!}</td>
                                <td>{{ $companyJourney->OurValuesTitle }}</td>
                                <td>{!! $companyJourney->OurValuesDescription !!}</td>
                                <td>
                                    @if($companyJourney->OurValuesImage)
                                    <img src="{{ asset('CompanyJourny/' . $companyJourney->OurValuesImage) }}" alt="Our Values" width="60">
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>{{ $companyJourney->OurServicetitle1 }}</td>
                                <td>{!! $companyJourney->OurServiceDescription1 !!}</td>
                                <td>{{ $companyJourney->OurServicetitle2 }}</td>
                                <td>{!! $companyJourney->OurServiceDescription2 !!}</td>
                                <td>{{ $companyJourney->OurServicetitle3 }}</td>
                                <td>{!! $companyJourney->OurServiceDescription3 !!}</td>

                                <td><a href="{{ route('admin.Company_Journey.edit', $companyJourney->id) }}" class="btn btn-primary">Edit</a></td>

                                <td>
                                    <form action="{{ route('admin.companyJourney.destroy', $companyJourney->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @if($companyJourneys->isEmpty())
                            <tr>
                                <td colspan="17" class="text-center text-muted">No data found.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection