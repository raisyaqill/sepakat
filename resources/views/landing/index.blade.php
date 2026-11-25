
@extends('layouts.app')

@section('title', 'Digital Business Agreement Platform')

@section('content')

<nav class="landing-nav">
    <a href="{{ route('landing') }}" class="brand">
        <span class="brand-icon"><i class="fa-solid fa-file-contract"></i></span>
        SEPAKAT
    </a>

    <div class="nav-links">
        <a href="#home">Home</a>
        <a href="#features">Features</a>
        <a href="#about">About</a>
    </div>

    <div class="nav-actions">
        <a href="{{ route('auth.account-type') }}" class="nav-signin">Sign In</a>
        <a href="{{ route('auth.account-type') }}" class="btn btn-primary">
            Get Started
        </a>
    </div>
</nav>

<section class="hero" id="home">
    <div class="hero-badge">
        <i class="fa-solid fa-circle-check"></i>
        Trusted by 5,000+ businesses globally
    </div>

    <h1>
        Simplify Your Business<br>
        <span>Agreements</span>
    </h1>

    <p>
        The all-in-one platform for digital contracts, automated payments,
        and secure blockchain verification. Fast, secure, and legally binding.
    </p>

    <div class="hero-actions">
        <a href="{{ route('auth.account-type') }}" class="btn btn-primary">
            Start Your Free Trial
        </a>

        <a href="#about" class="btn btn-outline">
            <i class="fa-solid fa-circle-play"></i>
            Watch Demo
        </a>
    </div>

    <div class="preview-window">
        <div class="preview-top">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <div class="preview-address">
                <i class="fa-solid fa-lock"></i>
                sepakat.id/dashboard/agreements
            </div>
        </div>

        <div class="preview-content">
            <aside class="preview-sidebar">
                <div class="skeleton" style="width:85%"></div>
                <div class="skeleton" style="width:55%"></div>
                <br>
                <div class="skeleton" style="width:65%"></div>
                <div class="skeleton" style="width:45%"></div>
                <div class="skeleton" style="width:70%"></div>
            </aside>

            <div class="preview-main">
                <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap">
                    <strong style="font-size:17px;color:var(--navy)">
                        Service Agreement - Web Design
                    </strong>

                    <span style="background:#dcfce7;color:#15803d;padding:6px 12px;border-radius:30px;font-size:10px;font-weight:800">
                        BLOCKCHAIN VERIFIED
                    </span>
                </div>

                <div class="preview-stats">
                    <div class="preview-stat">
                        <small>CONTRACT VALUE</small>
                        <strong>$12,500.00</strong>
                    </div>

                    <div class="preview-stat">
                        <small>EXPIRY DATE</small>
                        <strong>Oct 24, 2024</strong>
                    </div>
                </div>

                <div class="skeleton" style="height:18px"></div>
                <div class="skeleton" style="height:18px"></div>
                <div class="skeleton" style="width:70%;height:18px"></div>

                <div style="display:flex;justify-content:flex-end;gap:10px;margin-top:30px">
                    <button class="btn btn-outline" disabled>Decline</button>
                    <a href="{{ route('auth.account-type') }}" class="btn btn-primary">
                        Sign Contract
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-section" id="features">
    <div class="section-heading">
        <h2>Powerful Features for Modern Business</h2>
        <p>
            Everything you need to manage your business agreements
            from proposal to final payment.
        </p>
    </div>

    <div class="feature-grid">
        <article class="feature-card">
            <div class="feature-icon">
                <i class="fa-solid fa-file-signature"></i>
            </div>
            <h3>Digital Contracts</h3>
            <p>
                Create, send, and sign legally binding contracts in minutes.
                Our template builder makes it easy for anyone to draft
                professional agreements.
            </p>
        </article>

        <article class="feature-card">
            <div class="feature-icon">
                <i class="fa-solid fa-credit-card"></i>
            </div>
            <h3>Integrated Payments</h3>
            <p>
                Connect your bank account or payment gateway to
                automatically trigger payments once contracts are signed.
                No more chasing invoices manually.
            </p>
        </article>

        <article class="feature-card">
            <div class="feature-icon">
                <i class="fa-solid fa-link"></i>
            </div>
            <h3>Blockchain Verification</h3>
            <p>
                Every contract is hashed and stored on a private blockchain
                ledger, providing an immutable record of authenticity
                and timestamping.
            </p>
        </article>
    </div>
</section>

<section class="workflow-section" id="about">
    <div class="workflow-inner">
        <div>
            <h2>How It Works</h2>

            <div class="workflow-step">
                <span class="step-number">1</span>
                <div>
                    <h3>Draft Your Agreement</h3>
                    <p>
                        Use our library of vetted templates or upload
                        your own PDF. Customize terms in our intuitive editor.
                    </p>
                </div>
            </div>

            <div class="workflow-step">
                <span class="step-number">2</span>
                <div>
                    <h3>Invite Collaborators</h3>
                    <p>
                        Send a secure link to your client. They can review,
                        comment, and sign without creating an account.
                    </p>
                </div>
            </div>

            <div class="workflow-step">
                <span class="step-number">3</span>
                <div>
                    <h3>Execute & Secure</h3>
                    <p>
                        Upon signature, the document is sealed on the
                        blockchain and the payment schedule is activated.
                    </p>
                </div>
            </div>

            <a href="{{ route('auth.account-type') }}" class="btn btn-primary">
                Get Started Now
            </a>
        </div>

        <div class="workflow-visual">
            <span class="eyebrow" style="color:#93c5fd">VERIFICATION REGISTRY</span>

            <div class="registry-item">
                <span><i class="fa-solid fa-cube"></i> &nbsp; Block #8,214,192</span>
                <i class="fa-solid fa-circle-check" style="color:#4ade80"></i>
            </div>

            <div class="registry-item">
                <span><i class="fa-solid fa-cube"></i> &nbsp; Block #8,214,191</span>
                <i class="fa-solid fa-circle-check" style="color:#4ade80"></i>
            </div>

            <div class="registry-item">
                <span><i class="fa-solid fa-cube"></i> &nbsp; Block #8,214,190</span>
                <i class="fa-solid fa-circle-check" style="color:#4ade80"></i>
            </div>

            <div style="margin-top:25px;background:rgba(33,96,245,.25);padding:17px;border-radius:8px;text-align:center;font-size:11px;color:#dbeafe">
                100% Secure Cryptographic Hash: 0x71C...a83F
            </div>
        </div>
    </div>
</section>

<footer class="landing-footer">
    <div class="footer-grid">
        <div>
            <a href="{{ route('landing') }}" class="brand">
                <span class="brand-icon"><i class="fa-solid fa-file-contract"></i></span>
                SEPAKAT
            </a>

            <p class="text-muted" style="line-height:1.8;max-width:250px;margin-top:20px">
                Empowering businesses with secure, smart, and simplified
                contract management tools.
            </p>

            <div style="display:flex;gap:15px;color:#718096;margin-top:20px">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-github"></i>
            </div>
        </div>

        <div>
            <h4>Product</h4>
            <a href="#features">Features</a>
            <a href="#features">Integrations</a>
            <a href="#features">Pricing</a>
            <a href="#features">API Reference</a>
        </div>

        <div>
            <h4>Company</h4>
            <a href="#about">About Us</a>
            <a href="#about">Careers</a>
            <a href="#about">Blog</a>
            <a href="#about">Press Kit</a>
        </div>

        <div>
            <h4>Legal</h4>
            <a href="#about">Privacy Policy</a>
            <a href="#about">Terms of Service</a>
            <a href="#about">Cookie Policy</a>
            <a href="#about">Legal Notices</a>
        </div>
    </div>

    <div class="footer-bottom">
        <span>© 2026 SEPAKAT. All rights reserved.</span>
        <span>Secure Payment Processing &nbsp; | &nbsp; SSL Protected</span>
    </div>
</footer>

@endsection
