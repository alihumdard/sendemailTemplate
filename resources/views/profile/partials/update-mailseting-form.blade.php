<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Basic Mail Setting') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('if you want to change in an email response, CC email, and email body, you can modify it as follows.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="reply_to" :value="__('Reply Email')" />
            <x-text-input id="reply_to" name="reply_to" type="text" class="mt-1 block w-full" autocomplete="reply_to" />
            <x-input-error :messages="$errors->updatePassword->get('reply_to')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="cc_mail" :value="__('Cc Email')" />
            <x-text-input id="cc_mail" name="cc_mail" type="text" class="mt-1 block w-full" autocomplete="cc_mail" />
            <x-input-error :messages="$errors->updatePassword->get('cc_mail')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email_subject" :value="__('Email Subject')" />
            <x-text-input id="email_subject" name="email_subject" type="text" class="mt-1 block w-full" autocomplete="email_subject" />
            <x-input-error :messages="$errors->updatePassword->get('email_subject')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email_subject" :value="__('Email Subject')" />
            <textarea required="" class="form-control" style="height:200px !important;" rows="20" id="email_body" name="email_body" placeholder="Write email body">
                                                <div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px;">
                                                    <div class="header" style="background-color: #007BFF; color: #fff; text-align: center; padding: 20px 0;">
                                                        <h1 style="margin: 0;">[purpose]</h1>
                                                    </div>
                                                    <div class="message" style="background-color: #fff; padding: 20px;">
                                                        <p>Dear [Recipient's Name],</p>
                                                        <p>We hope this message finds you well. We wanted to inform you of an exciting opportunity that's coming up!<br></p>
                                                        <p>We look forward to your participation in this event. To reserve your spot, click on the link below:</p>
                                                        <p>Thank you for being a valued member of our community. We hope to see you at the webinar!</p>
                                                        <p style="text-align: left !important;">Best regards,</p>
                                                        <p style="text-align: left !important;">[Your Name]</p>
                                                        <p style="text-align: left !important;">[Your Title]</p>
                                                    </div>
                                                    <div class="footer" style="background-color: #007BFF; color: #fff; text-align: center; padding: 10px 0;">
                                                        &copy; {{ date('Y') }} {{ '[companyName]' }}
                                                    </div>
                                                </div>
                                            </textarea>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

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

</section>