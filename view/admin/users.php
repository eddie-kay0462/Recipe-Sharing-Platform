<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/users.css">
    <title>User Management</title>

</head>
<body>

    <div class="grid-container">
        <input type="checkbox" id="menu">
        <nav>
            <label for="">R3seaPea</label>
            <ul>
                <li><a href="index.html">Home</a></li>
            </ul>
            <label for="menu" class="menu-bar"><i class="fa fa-bars"></i></label>
        </nav>
        <div class="side-menu">
            <center>
                <img src="assets/images/me.jpg" alt=""><br><br>
                <h2>Admin</h2>
            </center>
            <br>
            <a href="index.html"><span class="material-symbols-outlined">home</span><span>Home</span></a>
            <a href="dashboard.html"><span class="material-icons-outlined">dashboard</span><span>Dashboard</span></a>
            <a href="recipe_mgt.html"><span class="material-symbols-outlined">lunch_dining</span><span>Recipes</span></a>
            <a href="users.html"><span class="material-icons-outlined">people</span><span>Users</span></a>
            <a href="#"><span class="material-icons-outlined">poll</span><span>Reports</span></a>
            <a href="login.html"><span class="material-symbols-outlined">logout</span><span>Logout</span></a>
        </div>

        <!-- main -->
        <main class="main-container">
            <h2>User List</h2>
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>
                            <button class="read-btn">View More</button>
                            <button class="update-btn">Update</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>
                            <button class="read-btn">View More</button>
                            <button class="update-btn">Update</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Emily Johnson</td>
                        <td>emilyj@example.com</td>
                        <td>
                            <button class="read-btn">View More</button>
                            <button class="update-btn">Update</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
        <!-- Update Form (Hidden) -->
        <div class="overlay"></div>
        <div class="update-form">
            <h3>Update User</h3>
            <input type="text" id="update-id" placeholder="Enter ID" required>
            <input type="text" id="update-name" placeholder="Enter Name" required>
            <input type="email" id="update-email" placeholder="Enter Email" required>
            <button id="update-submit">Update</button>
            <button id="cancel-update">Cancel</button>
        </div>

        <!-- Modal for viewing user details -->
         <div class="modal" id="user-modal">
            <h3>User Details</h3>
            <p id="user-details"></p>
            <button id="close-modal">Close</button>
         </div>
    </div>
    <script src="./assets/js/users.js"></script>
</body>
</html>
