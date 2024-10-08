<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bebé registrado!</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .baby-container {
            text-align: center;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .baby-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333333;
        }

        .baby-container p {
            font-size: 18px;
            margin-bottom: 40px;
            color: #555555;
        }

        .baby-container img {
            width: 150px;
            margin-bottom: 20px;
        }

        .chat-button {
            background-color: #007BFF;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .chat-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="baby-container">
        <img src="babyChat.png" alt="Logo de BabyChat">
        <h1>¡Bebé a bordo!</h1>
        <p>Has registrado a tu bebé correctamente, ahora puedes seleccionar su nombre para realizar un registro.</p>
        <button class="chat-button" onclick="closeModal()">Regresar al Chat
            <?php {
                header("Location:login.html");
            }
            ?>
        </button>
    </div>
    
</body>
</html>
