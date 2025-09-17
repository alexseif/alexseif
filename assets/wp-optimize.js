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

    initSmoothScrolling();

    // Initial load
    renderPackage("basic");
});