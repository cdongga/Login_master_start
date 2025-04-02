<?php require_once '../template/header.php'; ?>
<title>Home page</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Login System</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
            </ul>
            <form action="logout.php" method="post" class="d-flex">
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
        </div>
    </nav>

    <div class="alert alert-success">
        <h1>Status: You are logged in as <?php echo $_SESSION['Username']; ?></h1>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Welcome</h4>
            <p class="card-text">This content is protected and only visible to logged-in users.</p>
        </div>
    </div>
</div>
<?php require_once '../template/footer.php'; ?>