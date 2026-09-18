<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

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
            color: #dd82f0;
        }

        main {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #cccccc;
            text-align: left;
        }

        th {
            color: white;
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dddddd;
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
        <h1>Users Page</h1>

        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['username']) ?></td>

                        <td><?= esc($user['full_name']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>