<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        nav {
            background-color: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            color:  #dd82f0;
        }

        main {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="<?= base_url('/Home') ?>">Home</a>
        <a href="<?= base_url('/About') ?>">About</a>
        <a href="<?= base_url('/Customers') ?>">Customer Accounts</a>
        <a href="<?= base_url('/User') ?>">User Accounts</a>
    </nav>

    <main>
        <h1>Welcome to the Homepage</h1>
        <p>This is the homepage or landing page of our website.</p>
    </main>
</body>
</html>