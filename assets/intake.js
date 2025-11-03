/*
 * Intake Form JavaScript
 * Handles multi-step form navigation, progress animation, and interactions
 */

import './scss/intake.scss';

document.addEventListener('DOMContentLoaded', () => {
    const intakeForm = document.getElementById('intake-form');
    if (!intakeForm) return; // Exit if not on intake page

    const progressFill = document.getElementById('progress-fill');
    const totalSteps = 5; // Steps 1-5
    let currentStep = 1;

    // Form data storage (UI only, no submission)
    const formData = {};

    // Initialize
    updateProgress();
    showStep(currentStep);

    // Event listeners for navigation buttons
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('btn-next')) {
            const nextStep = parseInt(e.target.dataset.next);
            if (validateStep(currentStep)) {
                collectFormData(currentStep);
                goToStep(nextStep);
            }
        } else if (e.target.classList.contains('btn-prev')) {
            const prevStep = parseInt(e.target.dataset.prev);
            goToStep(prevStep);
        } else if (e.target.classList.contains('btn-submit')) {
            if (validateStep(currentStep)) {
                collectFormData(currentStep);
                showCompletion();
            }
        }
    });

    function goToStep(step) {
        hideStep(currentStep);
        currentStep = step;
        showStep(currentStep);
        updateProgress();
    }

    function showStep(step) {
        const stepElement = document.getElementById(`step-${step}`);
        if (stepElement) {
            stepElement.classList.add('active');
        }
    }

    function hideStep(step) {
        const stepElement = document.getElementById(`step-${step}`);
        if (stepElement) {
            stepElement.classList.remove('active');
        }
    }

    function updateProgress() {
        const progress = ((currentStep - 1) / totalSteps) * 100;
        progressFill.style.width = `${progress}%`;
    }

    function validateStep(step) {
        const stepElement = document.getElementById(`step-${step}`);
        const requiredFields = stepElement.querySelectorAll('input[required], select[required]');
        const radioGroups = stepElement.querySelectorAll('input[type="radio"][required]');
        let isValid = true;

        // Validate regular required fields
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.style.borderColor = '#ef4444'; // Red border for invalid
                isValid = false;
            } else {
                field.style.borderColor = '#d1d5db'; // Reset to default
            }
        });

        // Validate radio button groups (at least one selected per group)
        const radioNames = new Set();
        radioGroups.forEach(radio => radioNames.add(radio.name));

        radioNames.forEach(name => {
            const group = stepElement.querySelectorAll(`input[name="${name}"]`);
            const checked = Array.from(group).some(radio => radio.checked);
            if (!checked) {
                group.forEach(radio => radio.style.outline = '2px solid #ef4444');
                isValid = false;
            } else {
                group.forEach(radio => radio.style.outline = 'none');
            }
        });

        return isValid;
    }

    function collectFormData(step) {
        const stepElement = document.getElementById(`step-${step}`);
        const fields = stepElement.querySelectorAll('input, select, textarea');

        fields.forEach(field => {
            if (field.name) {
                if (field.type === 'checkbox') {
                    formData[field.name] = field.checked ? field.value || true : false;
                } else if (field.type === 'radio') {
                    if (field.checked) {
                        formData[field.name] = field.value;
                    }
                } else {
                    formData[field.name] = field.value;
                }
            }
        });
    }

    function showCompletion() {
        // Redirect to thank you page instead of showing inline completion
        // Form data is collected but not submitted (add AJAX submission here if needed)
        console.log('Form Data Collected:', formData); // For debugging
        window.location.href = '/intake/thank-you';
    }

    // Reset field borders and outlines on input/change
    document.addEventListener('input', (e) => {
        if (e.target.matches('input, select, textarea')) {
            e.target.style.borderColor = '#d1d5db';
        }
    });

    document.addEventListener('change', (e) => {
        if (e.target.matches('input[type="radio"]')) {
            // Reset outline for all radios in the same group
            const group = document.querySelectorAll(`input[name="${e.target.name}"]`);
            group.forEach(radio => radio.style.outline = 'none');
        }
    });

    // Keyboard navigation (Enter to next step)
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' && currentStep < totalSteps) {
            const nextBtn = document.querySelector('.step.active .btn-next');
            if (nextBtn) {
                nextBtn.click();
            }
        }
    });
});
