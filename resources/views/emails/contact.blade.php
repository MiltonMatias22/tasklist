<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial;
      color: #566573;
    }

    li {
      display: block;
      text-align: left;
    }

    h3,
    p,
    li {
      padding: 10px;
    }

    p {
      margin-top: 0
    }

    h3 {
      margin-top: 40px;
      margin-bottom: 0;
      display: block;
      background-color: #9B59B6;
      color: #FFFFFF;
      border-radius: 10px 10px 0 0
    }

    div {
      background-color: #E5E7E9;
    }
  </style>
</head>

<body>

  <h3>Email de contatos</h3>
  <div>
    <p>Email preenchido do formulário de contato do website</p>
    <ul>
      <li><b>Nome: </b>{!! $name !!}</li>
      <li><b>Email: </b>{!! $email !!}</li>
      <li><b>Phone: </b>{!! $phone !!}</li>
      <li><b>Mensagem: </b>{!! $bodyMessage !!}</li>
    </ul>
  </div>

</body>

</html>
