<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container{
           display: grid;
           place-items: center;
           min-height: 100vh;

        }
        .container h2{
            font-family: serif;
            font-size: 80px;

        }

        .container span{
            position: fixed;
            bottom: -50px;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background: linear-gradient(-135deg,red,white);
            animation: animate 10s linear infinite;
        }

        .container span:nth-child(1){
            left: 0;
            animation-delay: .6s;
            height: 50px;
            width: 50px;

        }

        .container span:nth-child(2){
            left: 10%;
            animation-delay: 3s;
            height: 60px;
            width: 60px;

        }

        .container span:nth-child(3){
            left: 20%;
            animation-delay: 2s;
            height: 80px;
            width: 80px;

        }

        .container span:nth-child(4){
            left: 30%;
            animation-delay: 5s;
           
        }

        .container span:nth-child(5){
            left: 40%;
            animation-delay: 1s;
           
        }

        .container span:nth-child(6){
            left: 50%;
            animation-delay: 7s;
            height: 90px;
            width: 90px;
           
        }

        .container span:nth-child(7){
            left: 60%;
            animation-delay: 6s;
            height: 120px;
            width: 120px;
           
        }

        .container span:nth-child(8){
            left: 70%;
            animation-delay: 8s;

        }

        .container span:nth-child(9){
            left: 80%;
            animation-delay: 6s;
           height: 50px;

        }

        .container span:nth-child(10){
            left: 90%;
            animation-delay:4s;
           height: 50px;
        }

        @keyframes animate{
            0%{
                bottom: 0;
                margin-left: 90px;
                margin-right: 0;

            }
            20%{
                bottom:20% ;
                margin-left: 0;
                margin-right: 90px;
            }
            40%{
             bottom: 40%;
             margin-left: 90px; 
             margin-right: 0; 

            }
            60%{
                bottom:60% ;
                margin-left: 0;
                margin-right: 90px;

            }
            80%{
                bottom: 80px;
                margin-left: 90px;
                margin-right: 0;
            }
            100%{
                bottom: 100%;
                margin-left: 90px;
                margin-right: 0;
            }
        }

    </style>

<div class="container">
    <h2>Login Is Done  </h2>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>

</div>
</body>
</html>