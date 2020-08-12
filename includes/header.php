<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
    crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <header>
            <h1>My blog</h1>
        </header>

        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="/cms/">Home</a></li>
                <?php if (Auth::isLoggedIn()): ?>
                    <li class="nav-item"><a class="nav-link" href="/cms/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/cms/logout.php">Log out</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="/cms/login.php">Log in</a></li>
                <?php endif; ?>
            </ul>
        </nav>

        <main>
