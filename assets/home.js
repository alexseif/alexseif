import './scss/main.scss';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Fade-in on scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add fade-in-visible class
                entry.target.classList.add('fade-in-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const fadeElements = document.querySelectorAll('.fade-in-scroll');
    fadeElements.forEach(el => observer.observe(el));

    // 2. Form Handling
    const form = document.getElementById('clinic-intake-form');
    const successMsg = document.getElementById('success-message');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Basic validation or API call would go here.
            // For now, simulate success.
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;

            btn.innerHTML = 'Sending...';
            btn.disabled = true;

            const formData = {
                yourName: form.name.value,
                clinicName: form.clinic.value,
                email: form.email.value,
                whatsapp: form.phone.value,
                website: form.website.value,
                message: form.message.value
            };

            fetch('/intake/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const fieldsWrapper = form.querySelector('.space-y-4');
                        if (fieldsWrapper) fieldsWrapper.style.display = 'none';
                        if (successMsg) successMsg.classList.remove('hidden');
                        form.reset();
                    } else {
                        alert('Submission failed: ' + (data.error || 'Unknown error'));
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Submission failed due to a network error.');
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                });
        });
    }
});
