
@extends('layouts.auth')

@section('title', 'Client Registration')

@section('content')
<div class="auth-shell">

    <a href="{{ route('landing') }}" class="brand auth-logo">
        <span class="brand-icon"><i class="fa-solid fa-file-contract"></i></span>
        SEPAKAT
    </a>

    <div class="auth-card">

        <h1 class="auth-title">Create Client Account</h1>
        <p class="auth-description">
            Register your business to start procuring goods and services.
        </p>

        <form data-demo-form>

            <div class="eyebrow">01. BUSINESS INFORMATION</div>
            <hr class="section-divider">

            <div class="form-group">
                <label class="form-label">
                    Business Name <span class="required">*</span>
                </label>
                <input class="form-control" type="text"
                       placeholder="e.g. Global Tech Solutions" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Business Email <span class="required">*</span>
                </label>
                <input class="form-control" type="email"
                       placeholder="procurement@business.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Business Registration Number (NIB)
                    <span class="required">*</span>
                </label>
                <input class="form-control" type="text"
                       placeholder="13-digit NIB number" required>
            </div>

            <div class="form-group">
                <label class="form-label">Upload NIB Document (PDF/JPG)</label>

                <label class="upload-area" for="client-nib">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <div id="client-file-name">Click to upload or drag and drop</div>
                    <div class="form-hint">Maximum file size: 5MB</div>
                </label>

                <input id="client-nib" type="file" accept=".pdf,.jpg,.jpeg,.png"
                       data-file-input="#client-file-name" hidden>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Business Address <span class="required">*</span>
                </label>
                <textarea class="form-control"
                          placeholder="Street name, Building, Suite, City, Zip Code"
                          required></textarea>
            </div>

            <div class="eyebrow" style="margin-top:25px">
                02. PERSONAL CONTACT INFORMATION
            </div>

            <hr class="section-divider">

            <div class="form-group">
                <label class="form-label">
                    Full Name (Contact Person) <span class="required">*</span>
                </label>
                <input class="form-control" type="text"
                       placeholder="John Doe" required>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px">
                <div class="form-group">
                    <label class="form-label">
                        Password <span class="required">*</span>
                    </label>
                    <input class="form-control" id="client-password"
                           type="password" minlength="8"
                           placeholder="Minimum 8 characters" required>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        Confirm Password <span class="required">*</span>
                    </label>
                    <input class="form-control" id="client-confirm-password"
                           type="password" minlength="8"
                           placeholder="Confirm password" required>
                </div>
            </div>

            <label class="check-row">
                <input type="checkbox" required>
                <span>
                    I agree to the
                    <a href="#">Terms of Service</a> and
                    <a href="#">Privacy Policy</a>.
                </span>
            </label>

            <button type="submit" class="btn btn-primary btn-block">
                Create Account
            </button>

        </form>

        <div class="auth-footer">
            Already have a business account?
            <a href="{{ route('auth.account-type') }}">Sign In</a>
        </div>
    </div>

    <div style="display:flex;gap:25px;justify-content:center;flex-wrap:wrap;margin-top:25px;color:#98a3b3;font-size:10px">
        <span><i class="fa-solid fa-shield-halved"></i> SSL Encrypted</span>
        <span><i class="fa-solid fa-lock"></i> Secure Payments</span>
        <span><i class="fa-solid fa-circle-check"></i> Verified Vendors</span>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.querySelector('form[data-demo-form]').addEventListener('submit', function(e) {
    e.preventDefault();

    const password = document.querySelector('#client-password').value;
    const confirm = document.querySelector('#client-confirm-password').value;

    if (password !== confirm) {
        alert('Password dan Confirm Password tidak sama.');
        return;
    }

    alert('Form Client berhasil divalidasi. Backend registration belum dihubungkan.');
});
</script>
@endpush
