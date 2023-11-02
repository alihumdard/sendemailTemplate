<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-900 leading-tight">
            {{ __('Emails Management') }}
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
                                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block whitespace-nowrap">Send New Email</a>
                            </div>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table mt-3" id="usertable">
                            <thead class="table-dark ">
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: center;">Client Name</th>
                                    <th style="text-align: center;">Client Email</th>
                                    <th style="text-align: center;">Attachment</th>
                                    <th style="text-align: center;">Resend</th>
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
                                @foreach($emails as $key => $val)
                                <tr>
                                    <td style="text-align: center;">{{++$key}}</td>
                                    <td style="text-align: center;">{{ $val['client_name'] ?? ''}}</td>
                                    <td style="text-align: center;">{{ $val['client_email'] ?? ''}}</td>
                                    <td style="text-align: center;">
                                        @if($val['document'])
                                        <a href="{{ asset($val['document']) }}" target="_blank">View Document</a>
                                        @else
                                        No Document Available
                                        @endif
                                    </td>
                                    <td style="text-align: center;">
                                        <form method="post" action="{{ route('sendmail') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" id="email_id" name="id" value="{{$val['id'] ?? ''}}">
                                            <input type="hidden" id="cc_email" name="cc_email" value="{{$val['cc_email'] ?? ''}}">
                                            <input type="hidden" id="reply_email" name="reply_email" value="{{$val['reply_email'] ?? ''}}">
                                            <input type="hidden" id="email_body" name="email_body" value="{{base64_decode($val['email_body']) ?? ''}}">
                                            <input type="hidden" id="email_subject" name="email_subject" value="{{$val['email_subject'] ?? ''}}">
                                            <input type="hidden" id="client_email" name="client_email" value="{{$val['client_email'] ?? ''}}">
                                            <input type="hidden" id="client_name" name="client_name" value="{{$val['client_name'] ?? ''}}">
                                            <input type="hidden" id="document" name="document" value="{{ $val['document'] }}">
                                            <button class="btn btn-warning btn-sm rounded-3 ">Resend</button>
                                        </form>
                                    </td>
                                    <td style="text-align: center;">
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item rounded">
                                                <form method="post" action="{{ route('duplicatemail') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" id="email_id" name="id" value="{{$val['id'] ?? ''}}">
                                                    <button class="btn btn-success btn-sm rounded  bg-primary" type="submit" data-toggle="tooltip" data-placement="top" title="Duplicate"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                                </form>

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
            $('form').on('submit', function(e) {
                showAlert('Email Sending', 'Please wait Email is sending ... ', '');
            });

        });
    </script>
    @if(session('status'))
    <script>
        $(document).ready(function() {
            showAlert(@json(session('status')), @json(session('message')), @json(session('type')));
        });
    </script>
    @endif

</x-app-layout>