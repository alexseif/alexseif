/* global packages */
import "./scss/wp-optimize.scss";

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
    initSmoothScrolling();
});



function formatEGP(price) {
    return new Intl.NumberFormat('en-EG', {
        style: 'currency',
        currency: 'EGP',
        minimumFractionDigits: 0
    }).format(price);
}
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".package-pane");
    const details = document.querySelectorAll(".package-details");
    const pricingCard = document.getElementById("pricing-card");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            const key = tab.dataset.package;

            // Toggle active tab
            tabs.forEach(t => t.classList.remove("active"));
            tab.classList.add("active");

            // Toggle visible package
            details.forEach(d => d.style.display = "none");
            const activeDetail = document.getElementById(`package-${key}`);
            if (activeDetail) activeDetail.style.display = "block";

            // Format price
            // const priceSpan = activeDetail.querySelector(".price span");
            // if (priceSpan) {
            // const rawPrice = packages[key].price.replace(/[^\d.]/g, '');
            // priceSpan.textContent = formatEGP(parseFloat(rawPrice));
            // }

            // Scroll to pricing card
            if (pricingCard) {
                pricingCard.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });
});
