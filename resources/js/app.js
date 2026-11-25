
import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Account type selection
    const accountOptions = document.querySelectorAll('.account-option');
    const continueButton = document.querySelector('#continue-account');

    accountOptions.forEach((option) => {
        option.addEventListener('click', () => {
            accountOptions.forEach((item) => {
                item.classList.remove('active');
                const radio = item.querySelector('input[type="radio"]');
                if (radio) radio.checked = false;
            });

            option.classList.add('active');

            const selectedRadio = option.querySelector('input[type="radio"]');
            if (selectedRadio) selectedRadio.checked = true;

            if (continueButton) {
                continueButton.disabled = false;
            }
        });
    });

    // Password visibility
    document.querySelectorAll('[data-toggle-password]').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.querySelector(button.dataset.togglePassword);
            if (!input) return;

            input.type = input.type === 'password' ? 'text' : 'password';
        });
    });

    // File upload display
    document.querySelectorAll('[data-file-input]').forEach((input) => {
        input.addEventListener('change', () => {
            const label = document.querySelector(input.dataset.fileInput);
            if (!label || !input.files.length) return;

            label.textContent = input.files[0].name;
        });
    });
});
