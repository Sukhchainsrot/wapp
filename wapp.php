<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Link Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WhatsApp Link Generator</h1>
        <form id="whatsappForm" method="post" action="#">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Generate WhatsApp Link">
        </form>

        <script>
            document.getElementById("whatsappForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent form submission

                var phone = document.getElementById("phone").value;
                var message = encodeURIComponent(document.getElementById("message").value);
                var whatsappLink = "https://api.whatsapp.com/send?phone=" + phone + "&text=" + message;

                window.location.href = whatsappLink; // Redirect to WhatsApp link
            });
        </script>
    </div>
</body>
</html>
