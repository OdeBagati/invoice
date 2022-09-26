<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/datatables.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styles.css" />
    <title>Jagadlab Invoice</title>
</head>
<body>

    <nav class="navbar">
        <div class="logo"><img src="<?= base_url(); ?>/assets/img/jagadlab.png" width="100" alt=""></div>
        <ul class="nav-links">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <li><a href="#">Home</a></li>
                <li class="database">
                    <a href="#">Database</a>
                    <ul class="dropdown">
                        <li><a href="#">New Account Customer</a></li>
                        <li><a href="#">Account List</a></li>
                        <li><a href="#">Tax Rate</a></li>
                        <li><a href="#">Sign Rate</a></li>
                    </ul>
                </li>
                <li><a href="#">PO</a></li>
                <li><a href="#">Invoice</a></li>
                <li><a href="#">Rekap</a></li>
            </div>
        </ul>
    </nav>
