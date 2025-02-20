@extends('architectpanel.layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>Project Management | Create Project</h4>
                            </div>

                            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    {{-- Project Information --}}
                                    <h5 class="mb-3">Project Information</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Name <span class="text-danger">*</span></label>
                                                <input type="text" name="project_name" class="form-control" value="{{ old('project_name') }}" required>
                                                @error('project_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Type</label>
                                                <select name="project_type" class="form-control">
                                                    <option value="residential" {{ old('project_type') == 'residential' ? 'selected' : '' }}>Residential</option>
                                                    <option value="commercial" {{ old('project_type') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                                                    <option value="industrial" {{ old('project_type') == 'industrial' ? 'selected' : '' }}>Industrial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Project Description</label>
                                                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Start Date <span class="text-danger">*</span></label>
                                                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}" required>
                                                @error('start_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Duration (Days) <span class="text-danger">*</span></label>
                                                <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration') }}" required>
                                                @error('duration')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date" name="end_date" id="end_date" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Budget & Cost --}}
                                    <h5 class="mt-4 mb-3">Budget & Costs</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Estimated Cost</label>
                                                <input type="number" name="estimated_cost" class="form-control" value="{{ old('estimated_cost') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Payment Terms</label>
                                                <select name="payment_terms" class="form-control">
                                                    <option value="full_advance" {{ old('payment_terms') == 'full_advance' ? 'selected' : '' }}>Full Advance</option>
                                                    <option value="milestone_based" {{ old('payment_terms') == 'milestone_based' ? 'selected' : '' }}>Milestone Based</option>
                                                    <option value="monthly" {{ old('payment_terms') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Assign Team Members --}}
                                    <h5 class="mt-4 mb-3">Assign Team Members</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Architect</label>
                                                <select name="architect_id" class="form-control">
                                                    <option value="1" {{ old('architect_id') == 1 ? 'selected' : '' }}>John Doe</option>
                                                    <option value="2" {{ old('architect_id') == 2 ? 'selected' : '' }}>Jane Smith</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Builder</label>
                                                <select name="builder_id" class="form-control">
                                                    <option value="1" {{ old('builder_id') == 1 ? 'selected' : '' }}>Michael Johnson</option>
                                                    <option value="2" {{ old('builder_id') == 2 ? 'selected' : '' }}>Sarah Williams</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Status --}}
                                    <h5 class="mt-4 mb-3">Status & Additional Information</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Project Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Create Project</button>
                                    <a href="{{ route('project.list') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@push('script')
<script>
    document.getElementById('start_date').addEventListener('change', function() {
        let startDate = new Date(this.value);
        let duration = document.getElementById('duration').value;
        if (duration) {
            startDate.setDate(startDate.getDate() + parseInt(duration));
            document.getElementById('end_date').value = startDate.toISOString().split('T')[0];
        }
    });

    document.getElementById('duration').addEventListener('input', function() {
        let startDate = new Date(document.getElementById('start_date').value);
        if (startDate) {
            startDate.setDate(startDate.getDate() + parseInt(this.value));
            document.getElementById('end_date').value = startDate.toISOString().split('T')[0];
        }
    });
</script>
@endpush
