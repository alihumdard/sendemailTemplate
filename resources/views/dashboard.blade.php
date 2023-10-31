<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send Email') }}
        </h2>
    </x-slot>

    <style>
        /* Inline CSS for email compatibility */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
        }

        .message {
            background-color: #fff;
            padding: 20px;
        }

        .cta {
            text-align: center;
            padding: 20px 0;
        }

        .footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>

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
                            <form method="post" action="{{ route('sendmail') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-danger text-bold" style="font-weight: bolder;">*Fill the Form correctly</h3>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="client_name" class="form-label" style="font-weight: 600;">Client Name</label>
                                            <input type="text" required="" class="rounded form-control" id="client_name" name="client_name" placeholder="Enter client name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cc_email" class="form-label" style="font-weight: 600;">Cc Email</label>
                                            <input type="email" required="" class="rounded form-control" id="cc_email" name="cc_email" placeholder="Enter Cc email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="client_email" class="form-label" style="font-weight: 600;">Client Email</label>
                                            <input type="email" required="" class="rounded form-control" id="client_email" name="client_email" placeholder="Enter client email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email_subject" class="form-label" style="font-weight: 600;">Email Subject</label>
                                            <input type="text" required="" class="rounded form-control" id="email_subject" name="email_subject" placeholder="Enter email subject">
                                        </div>
                                        <div class="mb-3">
                                            <label for="reply_email" class="form-label" style="font-weight: 600;">Reply Email</label>
                                            <input type="email" required="" class="rounded form-control" id="reply_email" name="reply_email" placeholder="Enter reply email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_attachments" class="form-label" style="font-weight: 600;">File Attachments</label>
                                            <input type="file" required="" class="py-2 px-3 border-primary rounded form-control bg-secondary" id="document" name="document">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="email_body" class="form-label" style="font-weight: 800;">Email Body</label>
                                            <textarea required="" class="form-control" style="height:200px !important;" rows="20" id="email_body" name="email_body" placeholder="Write email body">

                                                <div class="container">
                                                    <div class="header">
                                                        <h1>[purpose] </h1>
                                                    </div>
                                                    <div class="message">
                                                    <p>Dear [Recipient's Name],</p>

                                                        <p>We hope this message finds you well. We wanted to inform you of an exciting opportunity that's coming up!</p><br/>
                                                        <p>We look forward to your participation in this event. To reserve your spot, click on the link below:</p>
                                                        <p>Thank you for being a valued member of our community. We hope to see you at the webinar!</p>

                                                        <p style="text-align: left !important;">Best regards,</p>
                                                        <p style="text-align: left !important;" >[Your Name]</p>
                                                        <p style="text-align: left !important;">[Your Title]</p>

                                                    </div>
                                               
                                                    <div class="footer">
                                                        &copy; {{ date('Y') }} {{ '[companyName]' }}
                                                    </div>
                                                </div>

                                        </textarea>
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
            $('#if_template2').addClass('d-none');
            $('#btn_template1').click(function() {
                $('#if_template2').addClass('d-none');
                $('#if_template1').removeClass('d-none');
            });

            $('#btn_template2').click(function() {
                $('#if_template1').addClass('d-none');
                $('#if_template2').removeClass('d-none');
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
    <script src="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#email_body').summernote({
                toolbar: [
                    ['color', ['color']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['insert', ['picture']],
                    ['highlight', ['highlight']],
                ],
                styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'], // Include heading styles
                stylePara: {
                    tag: 'p', // Set the default tag to 'p' for left-aligned paragraphs
                    className: 'text-left', // Apply the 'text-left' class for left alignment
                    style: 'text-align:left;', // Apply the inline style for left alignment
                },
                minHeight: 140, // Set the default height to 200px
            });
        });
    </script>


</x-app-layout>