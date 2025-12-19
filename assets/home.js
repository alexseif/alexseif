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

            setTimeout(() => {
                form.style.display = 'none';
                if (successMsg) successMsg.classList.remove('hidden');
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 1000); // Simulate network delay
        });
    }
});
