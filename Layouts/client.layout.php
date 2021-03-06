<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>/reset.css">
    <link rel="stylesheet" href="<?= CSS ?>/helpers.css">
    <link rel="stylesheet" href="<?= CSS ?>/variables.css">
    <link rel="stylesheet" href="<?= CSS ?>/client/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ title }}</title>
</head>

<body>
    <?php
    require  "./Layouts/client/_header.php";
    require  "./Layouts/client/_cart-sidebar.php";
    echo "{{ content }}";
    require  "./Layouts/client/_footer.php";
    ?>

    <script src="<?= JS ?>/client/cart.js"></script>
</body>

</html>