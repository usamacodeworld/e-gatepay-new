    // Form submission
        document.querySelector('.auth-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add registration logic here
            alert('Application submitted successfully! Please check your email for verification.');
        });

        // Country code update based on country selection
        document.querySelector('select').addEventListener('change', function() {
            const countryCode = document.querySelector('.country-code');
            const countryCodes = {
                'Pakistan': '+92',
                'India': '+91',
                'Bangladesh': '+880',
                'UAE': '+971',
                'Saudi Arabia': '+966'
            };
            countryCode.textContent = countryCodes[this.value] || '+92';
        });

          // Password toggle functionality
        document.querySelector('.password-toggle').addEventListener('click', function() {
            const passwordInput = document.querySelector('input[type="password"]');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Form submission
        document.querySelector('.auth-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add login logic here
            window.location.href = 'index.html';
        });