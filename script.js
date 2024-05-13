document.addEventListener('DOMContentLoaded', function() {
    const ctaButton = document.getElementById('cta-btn');
    const popup = document.getElementById('cta-popup');
    const closeButton = document.getElementById('close-btn');

    ctaButton.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    window.addEventListener('click', function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    });

    closeButton.addEventListener('click', function() {
        popup.style.display = 'none';
    });
});
