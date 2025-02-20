@extends('architectpanel.layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>Builder Management | Edit Builder</h4>
                            </div>
                            <form action="{{ route('builder.update', $builder->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    {{-- Basic Information --}}
                                    <h5 class="mb-3">Basic Information</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $builder->company_name) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control" value="{{ old('name', $builder->name) }}" required>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control" value="{{ old('email', $builder->email) }}" required>
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone Number <span class="text-danger">*</span></label>
                                                <input type="text" name="phone" class="form-control" value="{{ old('phone', $builder->phone) }}" required>
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date of Birth <span class="text-danger">*</span></label>
                                                <input type="date" name="dob" class="form-control" value="{{ old('dob', $builder->dob) }}" required>
                                                @error('dob')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Unique ID <span class="text-danger">*</span></label>
                                                <input type="password" name="password" class="form-control">
                                                <small class="text-muted">Leave blank if you do not want to change the password.</small>
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Company Details --}}
                                    <h5 class="mt-4 mb-3">Company Details</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Registration Number</label>
                                                <input type="text" name="registration_number" class="form-control" value="{{ old('registration_number', $builder->registration_number) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>GST Number</label>
                                                <input type="text" name="gst_number" class="form-control" value="{{ old('gst_number', $builder->gst_number) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Website</label>
                                                <input type="text" name="website" class="form-control" value="{{ old('website', $builder->website) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Address</label>
                                                <textarea name="address" class="form-control">{{ old('address', $builder->address) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Status & Access Control --}}
                                    <h5 class="mt-4 mb-3">Status & Access</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status<span class="text-danger">*</span></label>
                                                <select name="status" class="form-control">
                                                    <option value="active" {{ $builder->status == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive" {{ $builder->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                                @error('status')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Additional Information --}}
                                    <h5 class="mt-4 mb-3">Additional Information</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Profile Picture</label>
                                                <input type="file" name="profile_image" class="form-control">
                                                @if ($builder->profile_image)
                                                    <img src="{{ asset('uploads/profile_images/' . $builder->profile_image) }}" alt="Profile Image" class="mt-2" width="100">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Remarks/Notes</label>
                                                <textarea name="remarks" class="form-control">{{ old('remarks', $builder->remarks) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <a href="{{ route('builder.list') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
