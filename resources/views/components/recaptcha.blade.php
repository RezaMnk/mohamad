<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="g-recaptcha d-flex justify-content-center" @class(['is-invalid' => $hasError]) data-theme="dark" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
@error('g-recaptcha-response')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
