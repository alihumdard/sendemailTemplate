<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send Email') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-2 col-md-3 col-sm-12">
                            <button class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#addUserModal">Add
                                User</button>
                        </div>
                    </div>
                    <div class="table-responsive-lg">
                        <table class="table mt-3">
                            <thead class="table-dark ">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-data">

                                <tr>
                                    <td colspan="6" rowspan="5">
                                        <div class="d-flex justify-content-center min-vh-100 align-items-center">
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add user modal start --}}
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="adduser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="user-from" action="storeUser" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="bearer_token" value="{{session('bearer_token')}}">
                        <input type="hidden" name="password" id="password" value="12345678">
                        <input type="hidden" name="id" id="user_id" value="">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">User Name:</label>
                            <input type="text" name="name" class="form-control" id="user-name">
                            <label for="recipient-name" class="col-form-label">User Email:</label>
                            <input type="email" name="email" class="form-control" id="user-email">
                            <label for="recipient-name" class="col-form-label">Email Subject:</label>
                            <input type="text" name="subject" class="form-control" id="subject">
                            <label for="recipient-name" class="col-form-label">Email Body:</label>
                            <textarea name="body" class="form-control" id="body">  </textarea>
                            <label for="recipient-name" class="col-form-label">Email Files:</label>
                            <input type="file" name="file" class="border p-2 form-control" id="file" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                        <button type="submit" style="background-color:green;" class="btn btn-success" id="btn_save">Send Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- add user modal end --}}
    @include('apicall')
</x-app-layout>