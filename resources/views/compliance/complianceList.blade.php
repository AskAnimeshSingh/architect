@extends('architectpanel.layouts.master')

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Compliance List</h4>
                    <form action="{{ route('compliance.add') }}" method="GET">
                      <button type="submit" class="btn btn-success">
                          <i class="bi bi-plus"></i> Add +
                      </button>
                  </form>
                  
                </div>
                



                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th> Name</th>
                                        <th>Project</th>
                                        <th>Members</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>Animesh Singh</td>
                                    <td>Project A</td>
                                    <td>10</td>
                                    <td>10th October, 2025</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                        <a href="#"><i class="fa fa-trash  "></i></a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
