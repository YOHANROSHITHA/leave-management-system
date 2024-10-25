<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management System</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            width: 100%;
            max-width: 1000px; 
            height: 600px; 
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .image-section {
            flex: 1;
            background: url('./images/leave.gif') no-repeat center center/cover; 
        }

        .container {
            flex: 1;
            padding: 40px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        header {
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2rem;
            color: #333333;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .description {
            font-size: 1.1rem;
            color: #555555;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .buttons a {
            text-decoration: none;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .buttons a:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .buttons a:nth-child(2) {
            background-color: #28a745;
        }

        .buttons a:nth-child(2):hover {
            background-color: #218838;
        }

        footer {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #888888;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
                height: auto;
            }

            .image-section {
                height: 300px;
            }

            .container {
                padding: 20px;
            }

            header h1 {
                font-size: 1.7rem;
            }

            .description {
                font-size: 1rem;
            }

            .buttons a {
                font-size: 0.9rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="image-section"></div> 
        

        <div class="container">
            <header>
                <h1>Leave Management System</h1>
            </header>

            <p class="description">
                Welcome to the Leave Management System, your trusted solution for efficiently managing and tracking
                employee leave requests. Whether you're applying for leave or managing team requests, our platform is
                designed for simplicity and ease of use.
            </p>

            <div class="buttons">
                <a href="../auth/signup.php">Sign Up</a>
                <a href="../auth/signin.php">Sign In</a>
            </div>

            <footer>
                &copy; 2024 Leave Management System. All rights reserved.
            </footer>
        </div>
    </div>

</body>

</html>
