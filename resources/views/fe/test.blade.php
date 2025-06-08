<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('') }}assets/css/test.scss"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}"> --}}
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}">

</head>

<body>
    <div class="content">
        <div class="sun"></div>

        <div class="sticky-section">
            <div class="sticky-section__stack sticky-section__stack--text">
                <div class="container">
                    <div class="aside">
                        <div class="aside__section">
                            <p class="aside__text">A Good Hamburger Needs:</p>
                        </div>
                        <div class="aside__section">
                            <p class="aside__text">Angus beef from the grill.</p>
                        </div>
                        <div class="aside__section">
                            <p class="aside__text">Melted raclette cheese.</p>
                        </div>
                        <div class="aside__section">
                            <p class="aside__text">Lightly salted tomato.</p>
                        </div>
                        <div class="aside__section">
                            <p class="aside__text">Crisp iceberg lettuce.</p>
                        </div>
                        <div class="aside__section">
                            <p class="aside__text">Et voilà!</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="sticky-section__stack">
                <div class="container">
                    <div class="center">
                        <div class="hamburger">

                            <div class="hamburger__item hamburger__item--top-bun"></div>
                            <div class="hamburger__item hamburger__item--salad"></div>
                            <div class="hamburger__item hamburger__item--tomato"></div>
                            <div class="hamburger__item hamburger__item--cheese"></div>
                            <div class="hamburger__item hamburger__item--patty"></div>
                            <div class="hamburger__item hamburger__item--bottom-bun"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="fab">
        <svg class="icon fab__icon">
            <use xlink:href="#down"></use>
        </svg>
        <span class="visually-hidden">Back to the top</span>
    </a>





    <!-- icon -->
    <svg width="0" height="0" class="hidden">
        <symbol id="down" xmlns="http://www.w3.org/2000/svg" viewBox="-10 -10 220 220">

            <path class="fab__progress" fill="none" stroke="currentColor" stroke-width="10"
                d="M 100 0 A 50 50 0 1 1 100 200 A 50 50 0 1 1 100 0 " />

            <path fill="none" stroke="currentColor" opacity=".2" stroke-width="10"
                d="M 100 0 A 50 50 0 1 1 100 200 A 50 50 0 1 1 100 0" />

            <path class="fab__arrow" fill="none" stroke="currentColor" stroke-width="10"
                d="M 60 100 L 100 60 L 140 100 M 100 60 L 100 140 " />
        </symbol>
    </svg>


</body>

</html>
