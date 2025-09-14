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


const packages = {
    basic: {
        price: "Starting from <span>24,000 EGP</span>",
        features: [
            "One-pager or brochure layout",
            "Contact form integration",
            "Basic SEO setup",
            "Mobile-friendly design",
            "Delivered in 5–7 days"
        ],
        note: "Perfect for clinics, freelancers, and small teams who need to show up online—fast."
    },
    store: {
        price: "Starting from <span>36,500 EGP</span>",
        features: [
            "Product pages & cart flow",
            "Payment gateway setup",
            "Retention tools (wishlist, abandoned cart)",
            "Speed & SEO optimization",
            "Delivered in 10–14 days"
        ],
        note: "Built for shops ready to grow. Clean, fast, and conversion-ready."
    },
    optimize: {
        price: "Starting from <span>9,000 EGP</span>",
        features: [
            "Speed boost & caching setup",
            "SEO tuning & metadata cleanup",
            "Performance report with insights",
            "WhatsApp support for 7 days",
            "Delivered in 3–5 days"
        ],
        note: "Already have a site? Let’s make it faster, clearer, and easier to trust."
    },
    custom: {
        price: "Starts at <span>18,000 EGP</span> — scoped per project",
        features: [
            "Fully branded layout & theme logic",
            "Modular SCSS architecture",
            "Custom animations or media blocks",
            "Conversion-ready proof stacking",
            "Flexible timeline & scope"
        ],
        note: "This is your vision, built from scratch. We scope it together, then build it right."
    }
};

const tabs = document.querySelectorAll(".package-pane");
const details = document.getElementById("package-details");

function renderPackage(key) {

    const pkg = packages[key];
    details.innerHTML = `
    <h3 class="price">${pkg.price}</h3>
    <ul class="feature-list">
      ${pkg.features.map(f => `<li>${f}</li>`).join("")}
    </ul>
    <p class="note">${pkg.note}</p>
  `;
}

tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        tabs.forEach(t => t.classList.remove("active"));
        tab.classList.add("active");
        renderPackage(tab.dataset.package);
    });
});



// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function () {

    // initSmoothScrolling();

    // Initial load
    renderPackage("basic");
});