<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send Email') }}
        </h2>
    </x-slot>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "@json(session('success'))",
        });
    </script>
    @endif
    <link href="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.min.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-black p-6 text-gray-900">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end  mb-3">
                        <button id="btn_template1" class="btn btn-primary me-md-2 bg-warning" type="button">Template One</button>
                        <button id="btn_template2" class="btn btn-primary  bg-primary" type="button">Template Two</button>
                    </div>

                    <div class="table-responsive-lg">
                        <div class="d-flex justify-content-center min-vh-100 align-items-top">
                            <iframe id="if_template1" class=" border-red rounded w-100" src="https://docs.google.com/document/d/1FcHBI0d8sZkfmu0raJlPrIWbGnUFlQJhq1tlyeNPqjg/edit?usp=sharing"></iframe>

                            <iframe id="if_template2" class="d-none border-red rounded w-100" src="https://docs.google.com/document/d/1l-0cVkO1RSTkaExamODmDwkEmMoh0UByOIRu2IbEK1Y/edit?usp=sharing"></iframe>
                        </div>
                    </div>

                    <div class="card text-center mt-5">
                        <div class="card-header">
                            <h3 class="card-title bold">Send Mail to User</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('template') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-danger text-bold">*Fill the Form correctly</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="client_name" class="form-label">Client Name</label>
                                            <input type="text" required="" class="rounded form-control" id="client_name" name="client_name" placeholder="Enter client name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="client_email" class="form-label">Client Email</label>
                                            <input type="email" required="" class="rounded form-control" id="client_email" name="client_email" placeholder="Enter client email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email_subject" class="form-label">Email Subject</label>
                                            <input type="text" required="" class="rounded form-control" id="email_subject" name="email_subject" placeholder="Enter email subject">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_attachments" class="form-label">File Attachments</label>
                                            <input type="file" required="" class="py-2 px-3 border-primary rounded form-control bg-secondary" id="document" name="document">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="email_body" class="form-label">Email Body</label>
                                            <textarea required="" class="form-control" style="height:200px !important;" rows="20" id="email_body" name="email_body" placeholder="Write email body"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="submit" class="bg-success btn btn-success">Mail to Client</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            // Initially, show the first iframe and hide the second iframe
            $('#if_template2').addClass('d-none');

            // When Template One button is clicked
            $('#btn_template1').click(function() {
                // Hide Template Two iframe
                $('#if_template2').addClass('d-none');
                // Show Template One iframe
                $('#if_template1').removeClass('d-none');
            });

            // When Template Two button is clicked
            $('#btn_template2').click(function() {
                // Hide Template One iframe
                $('#if_template1').addClass('d-none');
                // Show Template Two iframe
                $('#if_template2').removeClass('d-none');
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Summernote
            $('#email_body').summernote();
        });
    </script>

</x-app-layout>