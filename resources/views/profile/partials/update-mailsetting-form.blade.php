<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Basic Mail Setting') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('if you want to change in an email response, CC email, and email body, you can modify it as follows.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.mailsetting') }}" class="mt-6 space-y-6">
        @csrf
        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-6">
                <x-input-label for="reply_email" :value="__('Reply Email')" />
                <x-text-input id="reply_email" name="reply_email" type="email" class="mt-1 block w-full" :value="old('reply_email', $user->reply_email)" autocomplete="reply_email" />
                <x-input-error :messages="$errors->updatePassword->get('reply_email')" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-input-label for="cc_email" :value="__('Cc Email')" />
                <x-text-input id="cc_email" name="cc_email" type="email" class="mt-1 block w-full" :value="old('cc_email', $user->cc_email)" autocomplete="cc_email" />
                <x-input-error :messages="$errors->updatePassword->get('cc_email')" class="mt-2" />
            </div>
        </div>



        <div>
            <x-input-label for="email_subject" :value="__('Email Subject')" />
            <x-text-input id="email_subject" name="email_subject" type="text" class="mt-1 block w-full" :value="old('email_subject', $user->email_subject)" autocomplete="email_subject" />
            <x-input-error :messages="$errors->updatePassword->get('email_subject')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="mb-1" for="email_body" :value="__('Email Body')" />
            <textarea class="form-control" style="height:200px !important;" rows="20" id="email_body" name="email_body" placeholder="Write email body">
            {!! (old('email_body')) ? old('email_body') : (($user->email_body != NULL) ? base64_decode($user->email_body) : config('constants.EMAIL_BODY')) !!}
            </textarea>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>


    <link href="https://cdn.jsdelivr.net/gh/summernote/summernote@0.8.18/dist/summernote.css" rel="stylesheet">
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