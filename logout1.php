<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: #333;
        }

        /* Main Container */
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Heading */
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #e74c3c;
        }

        /* Logout Button */
        .logout-btn {
            background-color: #e74c3c;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .logout-btn:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .logout-btn:focus {
            outline: none;
        }

        .logout-btn i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>You have successfully logged out</h2>
        <button class="logout-btn" onclick="logout()">
            <i class="fa fa-sign-out"></i> Logout
        </button>
    </div>

    <script>
        function logout() {
            fetch("logout.php", {
                method: "POST"
            })
            .then(() => {
                window.location.href = "main.html";
            });
        }
    </script>
</body>
</html>
