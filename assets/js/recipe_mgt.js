// Get the modal
const modal = document.getElementById("recipeModal");

// Get the button that opens the modal
const btn = document.getElementById("add-recipe");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
const deleteButtons = document.querySelectorAll('.delete-btn'); // Get all delete buttons

const viewMoreButtons = document.querySelectorAll('.read-btn'); // Get all view more buttons

const recipeModal = document.getElementById('recipe-modal'); // Get the recipe modal
const recipeDetails = document.getElementById('recipe-details'); // Get the recipe details
const closeRecipeModal = document.getElementById('close-recipe-modal'); // Get the close recipe modal button
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// View more details on button click
viewMoreButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        const row = event.target.closest('tr');  // Get the row
        const recipeId = row.children[0].textContent;  // Get recipe ID
        const recipeName = row.children[1].textContent;  // Get recipe name
        const recipeAuthor = row.children[2].textContent;  // Get recipe author
        const dateCreated = row.children[3].textContent;  // Get date created
        // Show modal and overlay
        recipeModal.style.display = 'block';
        recipeDetails.style.display = 'block';

        // Show user details
        recipeDetails.innerHTML = `
            <p><strong>User ID:</strong> ${recipeId}</p><br>  
            <p><strong>Name:</strong> ${recipeName}</p><br>
            <p><strong>Email:</strong> ${recipeAuthor}</p><br>
            <p><strong>Date Created:</strong> ${dateCreated}</p>
        `;
    });

});

// Close recipe modal
closeRecipeModal.addEventListener('click', () => {
    recipeModal.style.display = 'none';
    recipeDetails.style.display = 'none';
});

// Delete row on button click
deleteButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        const row = event.target.closest('tr');  // Get the row
        const recipeName = row.children[1].textContent;  // Get the user name
        const confirmDelete = confirm(`Are you sure you want to recipe ${recipeName}?`);
        if (!confirmDelete) return;  // If user cancels, do nothing
        row.remove(); // Remove the row
    });
});


// Form validation
function validateForm() {
    let isValid = true;
    
    // Title validation
    if (document.getElementById("title").value.trim() === "") {
        document.getElementById("titleError").textContent = "Title is required";
        isValid = false;
    } else {
        document.getElementById("titleError").textContent = "";
    }

    // Ingredients validation
    if (document.getElementById("ingredients").value.trim() === "") {
        document.getElementById("ingredientsError").textContent = "Ingredients are required";
        isValid = false;
    } else {
        document.getElementById("ingredientsError").textContent = "";
    }

    // Preparation Time validation
    let prepTime = document.getElementById("prepTime").value;
    if (prepTime === "" || isNaN(prepTime) || prepTime < 0) {
        document.getElementById("prepTimeError").textContent = "Please enter a valid preparation time";
        isValid = false;
    } else {
        document.getElementById("prepTimeError").textContent = "";
    }

    // Cooking Time validation
    let cookTime = document.getElementById("cookTime").value;
    if (cookTime === "" || isNaN(cookTime) || cookTime < 0) {
        document.getElementById("cookTimeError").textContent = "Please enter a valid cooking time";
        isValid = false;
    } else {
        document.getElementById("cookTimeError").textContent = "";
    }

    // Serving Size validation
    if (document.getElementById("servingSize").value.trim() === "") {
        document.getElementById("servingSizeError").textContent = "Serving size is required";
        isValid = false;
    } else {
        document.getElementById("servingSizeError").textContent = "";
    }

    // Description validation
    if (document.getElementById("description").value.trim() === "") {
        document.getElementById("descriptionError").textContent = "Description is required";
        isValid = false;
    } else {
        document.getElementById("descriptionError").textContent = "";
    }

    // Instructions validation
    if (document.getElementById("instructions").value.trim() === "") {
        document.getElementById("instructionsError").textContent = "Instructions are required";
        isValid = false;
    } else {
        document.getElementById("instructionsError").textContent = "";
    }

    // Image URL validation (if provided)
    let imageUrl = document.getElementById("image").value.trim();
    if (imageUrl !== "" && !isValidUrl(imageUrl)) {
        document.getElementById("imageError").textContent = "Please enter a valid URL";
        isValid = false;
    } else {
        document.getElementById("imageError").textContent = "";
    }

    // Calories validation (if provided)
    let calories = document.getElementById("calories").value;
    if (calories !== "" && (isNaN(calories) || calories < 0)) {
        document.getElementById("caloriesError").textContent = "Please enter a valid number of calories";
        isValid = false;
    } else {
        document.getElementById("caloriesError").textContent = "";
    }

    return isValid;
}

// Helper function to validate URL
function isValidUrl(string) {
    try {
        new URL(string);
        return true;
    } catch (_) {
        return false;  
    }
}

// Form submission
document.getElementById("recipeForm").onsubmit = function(e) {
    e.preventDefault();
    if (validateForm()) {
        var formData = new FormData(e.target);
        var recipeData = Object.fromEntries(formData.entries());
        console.log(recipeData);
        // For now, we'll just log it and close the modal
        modal.style.display = "none";
    }
}