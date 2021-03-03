<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zawróć !</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('logov.png') }}" type="image/x-icon"/>

        <!-- Styles -->
    <style>

                            * {
                        margin: 0;
                        padding: 0;
                        }

                        a {
                        text-decoration: none;
                        }

                        body {
                        font-weight: 600;
                        color: #e30505;
                        }

                        .error_section {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        height: 100vh;
                        background-image: linear-gradient(-225deg, #1A1A1A, #e30505);
                        }
                        .error_section_subtitle {
                        color: #25F193;
                        text-transform: uppercase;
                        letter-spacing: 5pt;
                        font-weight: 500;
                        font-size: 0.8rem;
                        margin-bottom: -5em;
                        }
                        .error_section .error_title {
                        --x-shadow: 0;
                        --y-shadow: 0;
                        --x:50%;
                        --y:50%;
                        font-size: 15rem;
                        transition: all 0.2s ease;
                        position: relative;
                        padding: 2rem;
                        }
                        .error_section .error_title:hover {
                        transition: all 0.2s ease;
                        text-shadow: var(--x-shadow) var(--y-shadow) 10px #1A1A1A;
                        }
                        .error_section .error_title p {
                        position: absolute;
                        top: 2rem;
                        left: 2rem;
                        background-image: radial-gradient(circle closest-side, rgba(255, 255, 255, 0.05), transparent);
                        background-position: var(--x) var(--y);
                        background-repeat: no-repeat;
                        text-shadow: none;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        transition: all 0.1s ease;
                        }

                        .btn {
                        padding: 0.8em 1.5em;
                        border-radius: 99999px;
                        background-image: linear-gradient(to top, #03A9F4, #00BCD4);
                        box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.2), inset 0px -2px 5px 0px rgba(0, 0, 0, 0.2);
                        border: none;
                        cursor: pointer;
                        text-shadow: 0px 1px #343434;
                        color: white;
                        text-transform: uppercase;
                        letter-spacing: 1.5pt;
                        font-size: 0.8rem;
                        font-weight: 700;
                        transition: ease-out 0.2s all;
                        }
                        .btn:hover {
                        text-shadow: 0px 1px 1px #ffffff;
                        transform: translateY(-5px);
                        box-shadow: 0px 4px 15px 2px rgba(0, 0, 0, 0.1), inset 0px -3px 7px 0px rgba(0, 0, 0, 0.2);
                        transition: ease-out 0.2s all;
                        }

    </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <section class="error_section">
      <p class="error_section_subtitle">Strona nie jest obecnie dostępna !</p>
      <h1 class="error_title">
        <p>404</p>
        404
      </h1>
      <a href="workflow" class="btn">Powrót !</a>
    </section>

    <script>
        const title = document.querySelector('.error_title')

        document.onmousemove = function(e) {
        let x = e.pageX - window.innerWidth/2;
        let y = e.pageY - window.innerHeight/2;
        
        title.style.setProperty('--x', x + 'px')
        title.style.setProperty('--y', y + 'px')
        }

        title.onmousemove = function(e) {
        let x = e.pageX - window.innerWidth/2;
        let y = e.pageY - window.innerHeight/2;

        let rad = Math.atan2(y, x).toFixed(2); 
        let length = Math.round(Math.sqrt((Math.pow(x,2))+(Math.pow(y,2)))/10); 

        let x_shadow = Math.round(length * Math.cos(rad));
        let y_shadow = Math.round(length * Math.sin(rad));

        title.style.setProperty('--x-shadow', - x_shadow + 'px')
        title.style.setProperty('--y-shadow', - y_shadow + 'px')

        }

    </script>
    </html>