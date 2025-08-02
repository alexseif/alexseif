import "./scss/wp-optimize.scss";

// Initialize masonry layout for client logos with infinite scroll
function initMasonry() {
    const track = document.querySelector('.masonry-track');
    if (!track) return;

    // Clone the track content for infinite scrolling effect
    const clone = track.cloneNode(true);
    track.parentNode.appendChild(clone);

    console.log('Masonry layout with infinite scroll initialized');
}

// Smooth scrolling for anchor links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function () {
    initMasonry();
    initSmoothScrolling();
});
