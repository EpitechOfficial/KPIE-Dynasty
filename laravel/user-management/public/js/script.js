document.addEventListener("DOMContentLoaded", function() {
    const searchButton = document.querySelector('.search-button');
    const modalContainer = document.querySelector('.modal-container');
    const modalScreen = document.querySelector('.modal-screen');
    const modal = document.querySelector('.modal');

    // Open the modal when the search button is clicked
    searchButton.addEventListener('click', function() {
        modalContainer.classList.add('active');
    });

    // Close the modal when the screen outside the modal is clicked
    modalScreen.addEventListener('click', function() {
        modalContainer.classList.remove('active');
    });
    
    // Optional: Close the modal when pressing the "Escape" key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            modalContainer.classList.remove('active');
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const closeButton = document.querySelector('.close-btn');
    const announcement = document.querySelector('.announcement');
    
    closeButton.addEventListener('click', function() {
        announcement.style.display = 'none';
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.hero .fs, .hero .service-box');
    
    elements.forEach((element, index) => {
        setTimeout(() => {
            element.classList.add('active');
        }, index * 300); // Delay each element by 300ms multiplied by its index
    });
});
