<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-center  leading-tight">
            {{ __('Mails  Management') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.min.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-black p-6 text-gray-900">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end  mb-3">
                        @foreach($templates as $key => $val)
                        <button id="btn_template_{{++$key}}" data-href="" class="btn template-button {{($key % 2 == 0) ? 'bg-primary' : 'bg-warning'}} me-md-2" type="button">{{ $val['name']}}</button>
                        @endforeach
                    </div>

                    <div class="table-responsive-lg">
                        <div class="d-flex justify-content-center min-vh-100 align-items-top">
                            @foreach($templates as $key => $val)
                            <iframe id="if_template_{{++$key}}" class=" {{($key == 1) ? '' : 'd-none'}} border-red rounded w-100" src="{{$val['url']}}"></iframe>
                            @endforeach
                        </div>
                    </div>

                    <div class="card text-center mt-5">
                        <div class="card-header">
                            <h3 class="card-title bold pt-1">Send Mail to User</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('sendmail') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-danger text-bold" style="font-weight: bolder;">*Fill the Form correctly</h3>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="client_name" class="form-label" style="font-weight: 600;">Client Name</label>
                                            <input type="text" required="" class="rounded form-control" id="client_name" name="client_name" value="{{(old('client_name')) ? old('client_name') : $email->client_name ?? '' }}" placeholder="Enter client name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="cc_email" class="form-label" style="font-weight: 600;">Cc Email</label>
                                            <input type="email" required="" class="rounded form-control" id="cc_email" name="cc_email" value="{{old('cc_email', $user->cc_email)}}" placeholder="Enter Cc email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email_subject" class="form-label" style="font-weight: 600;">Email Subject</label>
                                            <input type="text" required="" class="rounded form-control" id="email_subject" value="{{old('email_subject', $user->email_subject)}}" name="email_subject" placeholder="Enter email subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="client_email" class="form-label" style="font-weight: 600;">Client Email</label>
                                            <input type="email" required="" class="rounded form-control" id="client_email" name="client_email" value="{{ (old('client_email')) ? old('client_email') : $email->client_email ?? '' }}" placeholder="Enter client email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="reply_email" class="form-label" style="font-weight: 600;">Reply Email</label>
                                            <input type="email" required="" class="rounded form-control" id="reply_email" value="{{old('reply_email', $user->reply_email)}}" name="reply_email" placeholder="Enter reply email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_attachments" class="form-label" style="font-weight: 600;">File Attachments</label>
                                            <input type="file" required="" class="py-2 px-3 border-primary rounded form-control bg-secondary" id="document" name="document">
                                            @if($email->document ?? NULL)
                                            <a class="text-primary" href="{{ asset($email->document) }}" target="_blank">
                                                <i class="fa fa-eye"></i> Previous Document
                                            </a>
                                            <a class="text-secondary text-bold bold btn btn-link" href="{{ asset($email->document) }}" target="_blank" download>
                                                <i class="fa fa-download"></i> Download
                                            </a>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="email_body" class="form-label" style="font-weight: 800;">Email Body</label>
                                            <textarea required="" class="form-control" style="height:200px !important;" rows="20" id="email_body" name="email_body" placeholder="Write email body">
                                                {!! (old('email_body')) ? old('email_body') : (($user->email_body != NULL) ? base64_decode($user->email_body) : config('constants.EMAIL_BODY')) !!}
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

    <script>
        $(document).ready(function() {
            $('iframe:not(:first)').addClass('d-none');

            $('.template-button').click(function() {
                var buttonId = $(this).attr('id');
                var iframeNumber = buttonId.replace('btn_template_', '');
                $('iframe').addClass('d-none');
                $('#if_template_' + iframeNumber).removeClass('d-none');
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