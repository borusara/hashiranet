<!DOCTYPE html>
<html>

<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    body {
      background-color: #000;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #001a33;
      padding: 20px;
      margin: 20px auto;
      max-width: 600px;
      border-radius: 10px;
    }

    h1 {
      color: springgreen;
      font-size: 24px;
      margin-top: 0;
    }

    p {
      margin-bottom: 20px;
      font-size: 16px;
      line-height: 1.5;
    }

    .redirect-buttons {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px;
    }

    .redirect-button {
      background-color: springgreen;
      color: #fff;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      margin-bottom: 10px;
      font-size: 17px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .redirect-button:hover {
      background-color: limegreen;
    }

    .redirect-button img {
      width: 20px;
      height: 20px;
      margin-left: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Want to share your feedback ?</h1>
    <p>Give or share your feedback to the founder of hashira using the button given below</p>

    <a class="redirect-button" href="https://t.me/Alpha_Legacy" target="_blank"><img src="tg.png"
        alt="Button Image"></a>
  </div>
</body>

</html>
