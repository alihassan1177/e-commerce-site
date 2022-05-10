<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | {{ title }}</title>
    <link rel="stylesheet" href="<?= CSS ?>/variables.css" />
    <link rel="stylesheet" href="<?= CSS ?>/helpers.css" />
    <link rel="stylesheet" href="<?= CSS ?>/reset.css" />
    <link rel="stylesheet" href="<?= CSS ?>/admin/style.css" />
</head>

<body class="admin-styles">
    <header class="header flex align-center space-between">
        <h2>E-commerce</h2>
        <p>Hello <?= $_SESSION['user']['name'] ?></p>
    </header>
    <button class="btn-primary-outline menu-toggle">Menu Toggle</button>
    <main class="flex align-start">
        <aside class="sidebar">
            <ul class="flex flex-column gap-1">
                <li><a href="./admin.php">Dashboard</a></li>
                <li><a href="./blog.php">Posts</a></li>
                <li><a href="./admin-products.php">Products</a></li>
            </ul>
        </aside>
        <div class="content">{{ content }}</div>
    </main>

    <script src="<?= JS ?>/admin/sidebar.js"></script>
</body>

</html>