<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AI Writing Tool')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: #0f172a;
            overflow: hidden;
        }

        /* Unified Gradient Blur Effect */
        .gradient-bg {
            position: absolute;
            width: 350px;
            height: 350px;
            background: radial-gradient(
                circle,
                rgba(80, 40, 200, 0.6) 0%,
                rgba(255, 0, 150, 0.5) 80%,
                rgba(0, 255, 150, 0.5) 100%
            );
            filter: blur(150px);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: move 8s infinite alternate ease-in-out;
        }

        /* Animation Effect */
        @keyframes move {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }
            100% {
                transform: translate(-50%, -48%) scale(1.1);
            }
        }


        /* Animation for Floating Effect */
        @keyframes move {
            from { transform: translate(-50%, -50%) scale(1); }
            to { transform: translate(-50%, -52%) scale(1.1); }
        }

        /* Smooth Input Focus Effect */
        input {
            transition: all 0.4s ease-in-out;
        }
        input:focus {
            transform: scale(1.01);
            box-shadow: 0px 0px 20px rgba(229, 22, 205, 0.948);
        }
    </style>
</head>
<body>
    
    <div class="gradient-bg"></div>

    <main>
        @yield('content')
    </main>

</body>
</html>
