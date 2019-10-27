<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container{
            width:90%;
            margin: 0 auto;
            background: #fff;
            padding:20px 5%;
        }
        .logo{
            height: 120px;
            width:120px;
            border: 5px solid #0433AD;
            background: no-repeat center center/contain
        }
        footer{
            min-height:300px;
            background:#03add3;
            width: 100%;
            padding:30px 0;
        }
        .col1, .col2, .col3{
            width: 33.33%;
            height: 100%;
            float:left;
        }
        ul{
            list-style:none;
        }
        ul li{
            font-size: 1.8rem;
            font-weight: 400;
            color:#fff;
        }
        ul li:first-child{
            font-size:2rem;
            color:#fff;
            font-weight:700;
            margin-bottom: 15px;
            position:relative
        }
        ul li:first-child::after{
            position: absolute;
            width: 50%;
            height: 5px;
            background: #fff;
            content: ' ';
            bottom:0;
            left:0;
        }
        section p:first-child{
            padding-top:50px
        }
        section p{
            font-size:1.2rem;
            text-align:left;
        }
        section h4{
            font-size:1.6rem;
            font-weight:700;
            text-decoration:underline;
            padding-top:10px;
            white-space: nowrap;
        }
       footer p{
            clear:both;
            color:#fff;
            text-align:center;
            font-size:1.2rem;
        }
        section{
            min-height: 400px;
            padding:0 50px
        }
        @media (max-width: 768px){
            .col1, .col2, .col3{
                width:100%;
                
            }
        }
    </style>
</head>
<body style="background:#03add3;">
    <div class="container">
        <header>
            <div class="logo" style="background-image:url({{ asset('images/logo/newlogo.png') }})">


            </div>
        </header>
        <section>
        <p>{!! $msg !!} </p>
        <h4>Givitec Ltd</h4>
        <p>Givitec Admin</p>
        </section>
        <footer>
            <div class="col1">
                <ul>
                    <li>Head Office</li>
                    <li>
                    GIVITEC LTD, GIVITEC Complex, 192 Muritalla Muhammed Way, Benin City, Edo State, Nigeria
                    </li>
                    <li>
                        <a href="mailto:info@givitec.com">info@givitec.com</a>
                    </li>
                    <li>+234(0) 807 9436 049</li>
                </ul>
            </div>
            <div class="col2">
                <ul>
                    <li>Lagos Office</li>
                    <li>
                    Cash and Carry Building, 222 Ahmadu Bello Way, Victoria Island, Lagos State, Nigeria
                    </li>
                </ul>
            </div>
            <div class="col3">
                <ul>
                    <li>Germany</li>
                    <li>
                    GIVITEC UG, Ems Str. 12, 38120 Braunshweig, Germany.
                    </li>
                </ul>
            </div>
            <p>&copy; {{ date('Y') }} Givitec Ltd. Alrights reserved</p>
        </footer>
    </div>
</body>
</html>