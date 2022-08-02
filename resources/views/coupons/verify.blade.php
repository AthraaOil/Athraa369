<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الماسح الضوئي</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;500&display=swap');

        body{
          margin: 0px;
          padding: 0px;
          background-color: #145E71;
          font-family: 'Tajawal', sans-serif;
        }
        .active-code {
            background-color: #F3B541;
            font-size: 1.5rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin: 100px auto;
            width: 20% ;
            padding: 5px;
            border:.15rem solid #145E71;
            color: #145E71;
            border-radius: .5rem;
            font-family: 'Tajawal', sans-serif;
        }

      .back{
        margin-top: 18%;
        text-align: center;
      }
      .text{

        color: #F3B541;
        margin-bottom: 40px;
        font-size: 1.5rem;
        font-weight: 700;
      }

      .cont5{
          color:#F3B541;
          position: absolute;

              text-align: center;

    /*      display: flex;*/
    /*justify-content: center;*/
     top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

      }
      .cont5 p{
          font-size:2rem;
      }
      </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="back">
                    <p class="text"> تمت عملية تفعيل الكوبون الخاص بك بنجاح</p>
                    <p class="text">الرمز الخاص بك هو </p>
                    <div class="active-code">
                        {{$active_code }}

                    </div>

            </div>
        </div>
    </div>
</body>
</html>
