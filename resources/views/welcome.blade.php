<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- css link under public folder -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <header class="section">
            <div class="container">
                <div class="header-top">
                    <h1>TZcorner</h1>
                    <a href="#">Sign in</a>
                </div>
                <nav>
                    <a href="#">Catalog</a>
                    <a href="#">Series</a>
                    <a href="#">Podcast</a>
                    <a href="#">Discussion</a>
                </nav>
            </div>
        </header>

        <div class="section">
            <div class="container">

                    <div class="row">

                        <div class="col">
                            <div class="box">
                                Some Callout Text
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                Some Callout Text
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                Some Callout Text
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                Some Callout Text
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </body>
</html>
