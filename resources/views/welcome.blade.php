<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Дребезов Денис</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script src="/js/app.js"></script>
    </head>
    <body>
        <div class="ml-3">Дребезов Денис. Пример кода</div>
        <div class="flex-center position-ref">
            <div class="content ">
                <div class="container">
                    <div class="p-3">
                        <form action="{{ route('welcome') }}" class="form-group d-flex w-100" method="GET" >
                            <label class="w-100">
                                Название
                                <input type="text" name="name" class="form-control w-100"/>
                            </label>
                            <button type="submit" class="btn btn-secondary ml-2">Поиск</button>
                        </form>
                        <div class="card-columns">
                            @foreach($books as $book)
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$book->name}}</h4>
                                            <p class="card-text">{{$book->author}}</p>
                                            <p class="card-text"><small class="text-muted">{{$book->description}}</small></p>
                                            <p class="card-text"><small class="text-muted">{{$book->pageCount}} с.</small></p>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
{{--                        {{ $books->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
