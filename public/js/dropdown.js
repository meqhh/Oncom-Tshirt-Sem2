document.addEventListener('click', function(event) {
    var dropdown = document.querySelector('.dropdown-content');
    if (event.target.closest('.dropdown')) {
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    } else {
        dropdown.style.display = 'none';
    }
});