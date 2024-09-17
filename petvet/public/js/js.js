document.addEventListener('DOMContentLoaded', function() {
    const imgBtn = document.querySelector('.image-buttons');
    const container = document.querySelector('.container');

    if (imgBtn && container) {
        imgBtn.addEventListener('click', function() {
            container.classList.toggle('s--signup');
        });
    } else {
        console.error('Elements not found');
    }
});
