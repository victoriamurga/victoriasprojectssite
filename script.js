const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;
const checkboxLabel = document.querySelector('.checkbox-label');

darkModeToggle.addEventListener('change', () => {
    body.classList.toggle('dark-mode', darkModeToggle.checked);
    updateLabel();
});

function updateLabel() {
    if (darkModeToggle.checked) {
        checkboxLabel.textContent = '🌙 Темна тема'; 
    } else {
        checkboxLabel.textContent = '🌞 Світла тема';
    }
}


let slideIndex = 0;
showSlides(slideIndex);
autoShowSlides();

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n - 1);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n >= slides.length) { slideIndex = 0 }
    if (n < 0) { slideIndex = slides.length - 1 }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex].style.display = "block";
    dots[slideIndex].className += " active";
}

function autoShowSlides() {
    slideIndex++;
    showSlides(slideIndex);
    setTimeout(autoShowSlides, 5000); // Change image every 5 seconds
}


// Function to handle form submission
document.getElementById('commentForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    // Get form values
    var name = document.getElementById('name').value;
    var comment = document.getElementById('comment').value;
    
    // Create a new comment element
    var newComment = document.createElement('div');
    newComment.classList.add('comment');
    newComment.innerHTML = '<p><strong>' + name + ':</strong> ' + comment + '</p>';
    
    // Append the new comment to the comments section
    document.getElementById('comments').appendChild(newComment);
    
    // Clear the form fields
    document.getElementById('name').value = '';
    document.getElementById('comment').value = '';
});