
@extends('layouts.auth')

@section('title', 'Vendor Registration')

@section('content')
<div class="auth-shell">

    <a href="{{ route('landing') }}" class="brand auth-logo">
        <span class="brand-icon"><i class="fa-solid fa-file-contract"></i></span>
        SEPAKAT
    </a>

    <div class="auth-card">

        <div style="display:flex;justify-content:space-between;align-items:center;gap:10px">
            <h1 class="auth-title" style="font-size:19px">Vendor Registration</h1>
            <span style="background:#e8efff;color:var(--blue);padding:6px 10px;border-radius:20px;font-size:9px;font-weight:800">
                SELLER ACCOUNT
            </span>
        </div>

        <p class="auth-description">
            Partner with us and expand your business reach to premium clients.
        </p>

        <form data-demo-form>

            <div class="eyebrow">01. VENDOR BUSINESS DETAILS</div>
            <hr class="section-divider">

            <div class="form-group">
                <label class="form-label">
                    Business / Company Name <span class="required">*</span>
                </label>
                <input class="form-control" type="text"
                       placeholder="e.g. Advanced Logistics Ltd" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Business Contact Email <span class="required">*</span>
                </label>
                <input class="form-control" type="email"
                       placeholder="sales@yourcompany.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Tax ID / NIB Number <span class="required">*</span>
                </label>
                <input class="form-control" type="text"
                       placeholder="Enter your 13-digit registration" required>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Upload Business Permit (PDF/JPG)
                </label>

                <label class="upload-area" for="vendor-permit">
                    <i class="fa-solid fa-file-arrow-up"></i>
                    <div id="vendor-file-name">Drag files here or click to browse</div>
                    <div class="form-hint">NIB, SIUP, or relevant business documentation</div>
                </label>

                <input id="vendor-permit" type="file"
                       accept=".pdf,.jpg,.jpeg,.png"
                       data-file-input="#vendor-file-name" hidden>
            </div>

            <div class="form-group">
                <label class="form-label">
                    Warehouse / Office Address <span class="required">*</span>
                </label>
                <textarea class="form-control"
                          placeholder="Full operational address for logistics"
                          required></textarea>
            </div>

            <div class="eyebrow" style="margin-top:25px">
                02. AUTHORIZED REPRESENTATIVE
            </div>

            <hr class="section-divider">

            <div class="form-group">
                <label class="form-label">
                    Full Name (Legal Representative)
                    <span class="required">*</span>
                </label>
                <input class="form-control" type="text"
                       placeholder="Enter full name as per ID" required>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px">
                <div class="form-group">
                    <label class="form-label">Password <span class="required">*</span></label>
                    <input class="form-control" id="vendor-password"
                           type="password" minlength="8"
                           placeholder="Minimum 8 characters" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Confirm Password <span class="required">*</span></label>
                    <input class="form-control" id="vendor-confirm-password"
                           type="password" minlength="8"
                           placeholder="Confirm password" required>
                </div>
            </div>

            <label class="check-row">
                <input type="checkbox" required>
                <span>
                    I certify that the information provided is accurate
                    and I agree to the <a href="#">Vendor Agreement</a>.
                </span>
            </label>

            <button type="submit" class="btn btn-primary btn-block">
                Register as Vendor
            </button>

        </form>

        <div class="auth-footer">
            Already part of our network?
            <a href="{{ route('auth.account-type') }}">Sign In</a>
        </div>
    </div>

    <div style="display:flex;gap:25px;justify-content:center;flex-wrap:wrap;margin-top:25px;color:#98a3b3;font-size:10px">
        <span><i class="fa-solid fa-circle-check" style="color:#10b981"></i> ISO 27001 Certified</span>
        <span><i class="fa-solid fa-shield-halved" style="color:#3b82f6"></i> Data Privacy Guaranteed</span>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.querySelector('form[data-demo-form]').addEventListener('submit', function(e) {
    e.preventDefault();

    const password = document.querySelector('#vendor-password').value;
    const confirm = document.querySelector('#vendor-confirm-password').value;

    if (password !== confirm) {
        alert('Password dan Confirm Password tidak sama.');
        return;
    }

    alert('Form Vendor berhasil divalidasi. Backend registration belum dihubungkan.');
});
</script>
@endpush
