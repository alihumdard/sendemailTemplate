<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-900 leading-tight">
            {{ __('Users Management') }}
        </h2>
    </x-slot>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- DataTables CSS with Bootstrap 4 styling -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- DataTables Select extension CSS with Bootstrap 4 styling (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container m-2">
                        <div class="row justify-content-center mb-1">
                            <div class="col-lg-2 col-md-3 col-sm-12 my-2">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-block whitespace-nowrap">Add New Client</a>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-12 my-2">
                                <a href="{{ route('templates') }}" class="btn btn-secondary btn-block whitespace-nowrap">Add New Template</a>
                            </div>
                        </div>
                    </div>


                    <div class="table-responsive-lg">
                        <table class="table mt-3" id="usertable">
                            <thead class="table-dark ">
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: center;">Name</th>
                                    <th style="text-align: center;">Account Email</th>
                                    <th style="text-align: center;">Transetional Email</th>
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-data">

                                <!-- <tr>
                                        <td colspan="6" rowspan="5">
                                            <div class="d-flex justify-content-center">
                                                <div class="spinner-border" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                @foreach($user as $key => $val)
                                <tr>
                                    <td style="text-align: center;">{{++$key}}</td>
                                    <td style="text-align: center;">{{ $val['name'] ?? ''}}</td>
                                    <td style="text-align: center;">{{ $val['email'] ?? ''}}</td>
                                    <td style="text-align: center;">{{ $val['mail_username'] ?? ''}}</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-success btn-sm rounded-3 bg-success" type="button">Active</button>
                                    </td>
                                    <td style="text-align: center;">
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item rounded">
                                                <a href="{{ route('register', ['id' => $val['id']]) }}" class="btn btn-success btn-sm rounded  bg-primary" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="<?= '/deleteUser/' . $val['id'] ?>" class="btn btn-danger btn-sm rounded  bg-danger" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#usertable').DataTable({
                select: true
            });
        });
    </script>

</x-app-layout>