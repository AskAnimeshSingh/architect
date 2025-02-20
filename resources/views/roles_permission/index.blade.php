@extends('architectpanel.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Roles Management</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Roles List</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addRoleModal">Add New Role</button>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Role Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Admin</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editRoleModal">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#assignPermissionModal">Assign Permissions</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Architect</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editRoleModal">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#assignPermissionModal">Assign Permissions</button>
                                </td>
                            </tr>
                            <!-- Add more roles dynamically later -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" class="form-control" placeholder="Enter role name">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Role</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Role Modal -->
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" class="form-control" value="Admin">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Role</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Assign Permissions Modal -->
<div class="modal fade" id="assignPermissionModal" tabindex="-1" role="dialog" aria-labelledby="assignPermissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignPermissionModalLabel">Assign Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Select Permissions</label>
                        <select class="form-control" multiple>
                            <option>View Dashboard</option>
                            <option>Manage Users</option>
                            <option>View Reports</option>
                            <option>Manage Projects</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Assign Permissions</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
