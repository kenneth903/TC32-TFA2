<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | Basic POS</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #111827;
            color: #e5e7eb;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 18px 8%;
            background: #1f2937;
            border-bottom: 1px solid #374151;
        }

        nav::before {
            content: "POS";
            color: #34d399;
            font-size: 22px;
            font-weight: 800;
            margin-right: auto;
            letter-spacing: 1px;
        }

        nav a {
            color: #d1d5db;
            text-decoration: none;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        nav a:hover {
            background: #374151;
            color: #34d399;
        }

        .container {
            width: 92%;
            max-width: 1100px;
            min-height: 450px;
            margin: 45px auto;
            padding: 35px;
            background: #1f2937;
            border: 1px solid #374151;
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.30);
        }

        h1 {
            margin-top: 0;
            color: #ffffff;
            font-size: 30px;
        }

        h1::after {
            content: "";
            display: block;
            width: 55px;
            height: 4px;
            background: #34d399;
            margin-top: 12px;
            border-radius: 5px;
        }

        p {
            color: #cbd5e1;
            font-size: 16px;
            line-height: 1.7;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 12px;
        }

        th {
            background: #34d399;
            color: #052e2b;
            padding: 15px;
            text-align: left;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            padding: 16px 15px;
            border-bottom: 1px solid #374151;
            color: #e5e7eb;
        }

        tr {
            background: #273549;
        }

        tr:nth-child(even) {
            background: #2d3b50;
        }

        tr:hover {
            background: #374151;
        }

        footer {
            color: #94a3b8;
            text-align: center;
            padding: 12px 20px 28px;
            font-size: 14px;
        }

        @media (max-width: 700px) {
            nav {
                flex-wrap: wrap;
                padding: 15px;
            }

            nav::before {
                width: 100%;
                margin-bottom: 5px;
            }

            nav a {
                padding: 8px 10px;
                font-size: 12px;
            }

            .container {
                padding: 22px;
                margin: 25px auto;
            }

            th, td {
                padding: 10px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

<nav>
    <a href="<?= site_url('/') ?>">Home</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customers</a>
    <a href="<?= site_url('users') ?>">Users</a>
</nav>

<div class="container">