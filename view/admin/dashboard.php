<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>

    <div class="grid-container">
        <input type="checkbox" id="menu">
        <nav>
            <label for="">R3seaPea</label>
            <ul>
                <li><a href="index.html">HOOme</a></li>
            </ul>

            <label for="menu" class="menu-bar"><i class="fa fa-bars"></i></label>
        </nav>
        <div class="side-menu">
            <center>
                <img src="/assets/images/me.jpg" alt="">
                <h2>Admin</h2>
            </center>
            <a href="index.html"><span class="material-symbols-outlined">home</span><span>Home</span></a>
            <a href="dashboard.html"><span class="material-icons-outlined">dashboard</span><span>Dashboard</span></a>
            <a href="recipe_mgt.html"><span class="material-symbols-outlined">lunch_dining</span><span>Recipes</span></a>
            <a href="users.html"><span class="material-icons-outlined">people</span><span>Users</span></a>
            <a href="#"><span class="material-icons-outlined">poll</span><span>Reports</span></a>
            <a href="login.html"><span class="material-symbols-outlined">logout</span><span>Logout</span></a>
        </div>

        <!-- main -->
        <main class="main-container">
            <div class="title">
                <h1>Dashboard</h1>
            </div>
            <div class="major-cards">
                <div class="card">
                    <div class="card-inner-item">
                        <h3>TOTAL USERS</h3>
                        <span class="material-icons-outlined">people</span>
                    </div>
                    <h1>5000</h1>
                </div>

                <div class="card">
                    <div class="card-inner-item">
                        <h3>TOTAL RECIPES</h3>
                        <span class="material-icons-outlined">lunch_dining</span>
                    </div>
                    <h1>4000</h1>
                </div>
            </div>
        </main>

    </div>


</body>

</html>