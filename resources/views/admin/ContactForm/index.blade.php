@extends('admin.layout.master')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Contact Form</h6>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Country</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ContactForms as $ContactForm)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $ContactForm->name }}</td>
                                <td>{{ $ContactForm->email }}</td>
                                <td>{{ $ContactForm->phone }}</td>
                                <td>{{ $ContactForm->country }}</td>
                                <td>{{ $ContactForm->message }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No contact form submissions found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection