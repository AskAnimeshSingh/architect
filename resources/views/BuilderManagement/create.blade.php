@extends('architectpanel.layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>Builder Management | Add Builder</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Builder <span class="text-danger">*</span></label>
                                                <select name="builder_id" class="form-control" required>
                                                    <option value="" disabled selected>-- Select Builder --</option>
                                                    <option value="1">John Doe</option>
                                                    <option value="2">Jane Smith</option>
                                                    <option value="3">Michael Johnson</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Message <span class="text-danger">*</span></label>
                                                <textarea name="message" class="form-control" rows="3" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
