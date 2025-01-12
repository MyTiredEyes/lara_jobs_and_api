<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обратная связь</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      padding: 20px;
    }
    .container {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 600px;
      margin: 0 auto;
    }
    h1 {
      color: #007bff;
      font-size: 24px;
      margin-bottom: 20px;
    }
    .details {
      margin-bottom: 20px;
    }
    .details p {
      margin: 5px 0;
    }
    .footer {
      font-size: 12px;
      color: #777;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Сообщение от пользователя</h1>
    <div class="details">
      <p><strong>Имя:</strong> {{$data['name']}}</p>
      <p><strong>Email:</strong> {{$data['email']}}</p>
      <p><strong>Тема:</strong> {{$data['subject']}}</p>
    </div>

    <div class="message">
      <h3>Сообщение:</h3>
      <p>{{$data['message']}}</p>
    </div>

    <div class="footer">
      <p>Это письмо было отправлено через форму обратной связи на сайте.</p>
    </div>
  </div>
</body>
</html>
