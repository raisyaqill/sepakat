
@extends('layouts.auth')

@section('title', 'Choose Account Type')

@section('content')
<div class="auth-shell">

    <a href="{{ route('landing') }}" class="brand auth-logo">
        <span class="brand-icon"><i class="fa-solid fa-file-contract"></i></span>
        SEPAKAT
    </a>

    <div class="auth-card" style="max-width:850px;text-align:center">

        <h1 class="auth-title">Join SEPAKAT</h1>
        <p class="auth-description">
            Choose how you want to use the platform.
        </p>

        <form id="account-form" data-demo-form>
            <div class="account-choice">

                <label class="account-option active">
                    <input type="radio" name="account_type" value="client" checked>

                    <span class="account-check">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>

                    <div class="account-option-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>

                    <h3>I'm a Client</h3>

                    <p>
                        I am looking to purchase goods, procure raw materials,
                        or hire professional services for my business.
                    </p>

                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i> Browse vendor catalogs</li>
                        <li><i class="fa-solid fa-circle-check"></i> Secure escrow payments</li>
                    </ul>
                </label>

                <label class="account-option">
                    <input type="radio" name="account_type" value="vendor">

                    <span class="account-check">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>

                    <div class="account-option-icon">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>

                    <h3>I'm a Vendor</h3>

                    <p>
                        I supply goods, distribute products, or provide services
                        and want to manage my contracts and invoices.
                    </p>

                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i> Manage distribution networks</li>
                        <li><i class="fa-solid fa-circle-check"></i> Automated invoicing</li>
                    </ul>
                </label>

            </div>

            <button type="button" id="continue-account" class="btn btn-primary"
                    style="width:260px"
                    onclick="continueAccount()">
                Continue as Client
            </button>
        </form>

        <div class="auth-footer">
            Already have an account?
            <a href="{{ route('auth.account-type') }}">Sign In</a>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
function continueAccount() {
    const selected = document.querySelector(
        'input[name="account_type"]:checked'
    );

    if (!selected) return;

    if (selected.value === 'client') {
        window.location.href = "{{ route('auth.client.register') }}";
    } else {
        window.location.href = "{{ route('auth.vendor.register') }}";
    }
}
</script>
@endpush
