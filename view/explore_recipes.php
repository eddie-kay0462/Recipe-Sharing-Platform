<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Feed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/recipefeed.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">R3seaPea</a></div>
            <ul class="links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#" id="contact">Contact</a></li>
            </ul>
            <!-- <a href="#" class="action_btn">Get Started</a> -->
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#" id="contact">Contact</a></li>
            <!-- <li><a href="recipe_feed.html" class="action_btn">Get Started</a></li> -->
        </div>
    </header>
    <div class="content" style="background: rgba(0, 0, 0, 0.7) url(../assets/images/2-recipe.jpg) center center fixed;">
        <p>Find the best recipes in a few steps</p>
        <div class="search">
            <input type="text" id="searchInput" placeholder="Search for a recipe">
            <button id="searchButton">Search</button>
        </div>
    </div>
    <div class="recipe-container">
        <!-- recipe card -->
        <div class="card">
            <img src="../assets/images/asparagus.jpg" alt="Lemon-Garlic Asparagus">
            <div class="badge popular">Popular</div>
            <div class="info">
                <h3>Lemon-Garlic Asparagus</h3>
                <p>R3seaPea</p>
                <span class="likes">536</span>
            </div>
        </div>
        <div class="card">
            <img src="../assets/images/spinach.jpeg" alt="Warm Spinach Dip">
            <div class="badge promoted">Promoted</div>
            <div class="info">
                <h3>Warm Parmesan Spinach Dip</h3>
                <p>R3seaPea</p>
                <span class="likes">5k</span>
            </div>
        </div>

        <div class="card">
            <img src="../assets/images/beef-stew.jpg" alt="Beef Stew Recipes">
            <div class="badge promoted">Promoted</div>
            <div class="info">
                <h3>Beef Stew Recipes</h3>
                <p>R3seaPea</p>
                <span class="likes">1.2k</span>
            </div>
        </div>

        <div class="card">
            <img src="../assets/images/egg-casserole.jpg" alt="Low Calorie Egg Casserole">
            <div class="badge popular">Popular</div>
            <div class="info">
                <h3>Low Calorie Egg Casserole</h3>
                <p>R3seaPea</p>
                <span class="likes">223</span>
            </div>
        </div>

        <div class="card">
            <img src="../assets/images/veggie-pasta.jpg" alt="Veggie Pasta">
            <div class="badge promoted">Promoted</div>
            <div class="info">
                <h3>Veggie Pasta</h3>
                <p>R3seaPea</p>
                <span class="likes">3.5k</span>
            </div>
        </div>

        <div class="card">
            <img src="../assets/images/cottage-cheese.png" alt="Veggie Pasta">
            <div class="badge promoted">Promoted</div>
            <div class="info">
                <h3>Veggie Pasta</h3>
                <p>R3seaPea</p>
                <span class="likes">3.5k</span>
            </div>
        </div>
        <script>
            const toggleBtn = document.querySelector('.toggle_btn');
            const toggleBtnIcon = document.querySelector('.toggle_btn i');
            const dropDownMenu = document.querySelector('.dropdown_menu');
            toggleBtn.onclick = function() {
                dropDownMenu.classList.toggle('open');
                const isOpen = dropDownMenu.classList.contains('open');
                toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'
            }
        </script>
</body>

</html>