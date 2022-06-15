<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="g-recaptcha" @class(['is-invalid' => $hasError]) data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
@error('g-recaptcha-response')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
