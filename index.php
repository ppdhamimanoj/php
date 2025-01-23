<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Eclipse</title>
    <p> this is for test purpose </p>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(to bottom, #001f3f, #001a33);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .solar-system {
            position: relative;
            width: 300px;
            height: 300px;
        }

        .sun {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, #FFD700,rgb(156, 59, 24));
            border-radius: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 50 50 1000px rgba(229, 155, 110, 0.7);
        }

        .moon {
            position: absolute;
            top: 50%;
            left: -150px;
            width: 200px;
            height: 200px;
            background: #555;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(153, 37, 37, 0.5);
            transform: translateY(-50%);
            animation: moveMoon 5s linear infinite;
        }

        @keyframes moveMoon {
            0% {
                left: -150px;
            }
            50% {
                left: 50%;
                transform: translate(-50%, -50%);
            }
            100% {
                left: 450px;
            }
        }

        .message {
            position: absolute;
            bottom: 50px;
            font-size: 24px;
            color: #fff;
            text-align: center;
            width: 100%;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="solar-system">
        <div class="sun"></div>
        <div class="moon"></div>
    </div>
    <div class="message">
        <?php echo 'Solar Eclipse Simulation'; ?>
    </div>
</body>
</html>

