<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/index.css" media="screen" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L2Rates - рейтинг серверов Lineage II</title>
</head>
<body>

<div class="grid">
    <header>
        <div class="server_banner">
            <img src="../img/banner.png">
        </div>
    </header>
    <nav>
        <div class="left-buttons">
            <a class="button-nav b-contacts" href=""><span class="button-text contact-text">Контакты</span></a>
            <a class="button-nav b-services" href=""><span class="button-text">Услуги</span></a>
        </div>
        <div class="n-logo">
            <img src="../img/logo.png">
            <a class="logo">L2anoncer-web</a>
        </div>
        <div class="right-buttons">
            <a class="button-nav b-streamers" href=""><span class="button-text streamers-text">Стримерам</span></a>
            <a class="button-nav b-servers" href=""><span class="button-text">Разместить</span></a>
        </div>
    </nav>
    <content>
        <div class="wrapper">
            <div class="streamers-container">
                <a class='name_category'><span class="name_body">Стримы по Lineage II &#128101;</span></a>
                <div class="streamer streamer-one">
                    <a class="free_slot" href="">Свободное место 1</a>
                </div>
                <div class="streamer streamer-two">
                    <a class="free_slot" href="">Свободное место 2</a>
                </div>
                <div class="streamer streamer-three">
                    <a class="free_slot" href="">Свободное место 3</a>
                </div>
                <span class="close_container"></span>
            </div>

            {{--КОНТЕЙНЕРЫ С СЕРВЕРАМИ--}}
            <div class="servers-container">
                <a class='name_category'><span class="name_body">Анонсы новых серверов Lineage II</span></a>
                <div class="left-containers">
                    <a class='page soon_open'>Скоро открываются</a>
                    <div class="soon_open_servers">
                        @foreach ($serversList['soonOpen'] as $soon)
                            <ul class="get_server">
                                <li class="server status_server" href="">TOP</li>
                                <li class="server name_server" href="">{{ $soon->host }}</li>
                                <li class="server icons_server" href=""></li>
                                <li class="server rates_server" href="">{{ $soon->rates }}</li>
                                <li class="server chronicle_server" href="">{{ $soon->chronicles }}</li>
                                <li class="server date_server">{{ Carbon\Carbon::parse($soon->open_date)->format('Y-m-d') }}</li>
                            </ul>
                        @endforeach
                    </div>
{{--                    <?php dd($serversList)?>--}}
                    <div class="yesterday_servers">
                        <a class='page today_open'>Открываются сегодня</a>
                        <div class="soon_open_servers">
                            @foreach ($serversList['todayOpen'] as $today)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $today->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $today->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $today->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($today->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="tomorrow_servers">
                        <a class='page today_open'>Открываются завтра</a>
                        <div class="soon_open_servers">
                            @foreach ($serversList['tomorrowOpen'] as $tomorrow)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $tomorrow->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $tomorrow->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $tomorrow->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($tomorrow->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="opens_7day_servers">
                        <a class='page today_open'>Ближайшую неделю</a>
                        <div class="soon_open_servers">
                            @foreach ($serversList['weekOpen'] as $week)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $week->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $week->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $week->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($week->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="tomorrow_servers">
                        <a class='page today_open'>Более недели</a>
                        <div class="soon_open_servers">
                            @foreach ($serversList['weekPlusOpen'] as $weekPlus)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $weekPlus->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $weekPlus->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $weekPlus->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($weekPlus->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="right-containers">
                    <div class="opened_servers">
                        <a class='page today_open'>Открытые сервера</a>
                        <div class="soon_open_servers">
                            @foreach ($serversList['alreadyOpen'] as $open)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $open->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $open->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $open->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($open->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="last_7day_servers">
                            <a class='page today_open'>Открылись вчера</a>
                            @foreach ($serversList['yesterdayOpen'] as $yesterday)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $yesterday->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $yesterday->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $yesterday->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($yesterday->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="last_7day_servers">
                            <a class='page today_open'>Предыдущую неделю</a>
                            @foreach ($serversList['lastWeekOpen'] as $lastWeek)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $lastWeek->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $lastWeek->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $lastWeek->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($lastWeek->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="opened_7plus_servers">
                            <a class='page today_open'>Более недели назад</a>
                            @foreach ($serversList['lastWeekPlusOpen'] as $lastWeekPlus)
                                <ul class="get_server">
                                    <li class="server status_server" href="">TOP</li>
                                    <li class="server name_server" href="">{{ $lastWeekPlus->host }}</li>
                                    <li class="server icons_server" href=""></li>
                                    <li class="server rates_server" href="">{{ $lastWeekPlus->rates }}</li>
                                    <li class="server chronicle_server" href="">{{ $lastWeekPlus->chronicles }}</li>
                                    <li class="server date_server"
                                        href="">
                                        {{ Carbon\Carbon::parse($lastWeekPlus->open_date)->format('Y-m-d') }}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="filters-container">
                <a class='filter__names'><span class="name_body">Фильтры по серверам &#128269;</span></a>
                <div class="rates_buttons">
                    <a class="filter filter_chronicle">High Five</a>
                    <a class="filter filter_chronicle">Essence</a>
                    <a class="filter filter_chronicle">Classic</a>
                    <a class="filter filter_chronicle">C4</a>
                    <a class="filter filter_chronicle">Interlude</a>
                    <a class="filter filter_chronicle">Interlude+</a>
                    <a class="filter filter_chronicle">Epilogue</a>
                    <a class="filter filter_chronicle">Final</a><br>

                    <div class="button_chronicles">
                        <a class="button_all_chronicles">Все хроники</a>
                    </div>

                </div>
                <span class="close_container"></span>
            </div>
            <div class="promo-container">
                <a class='filter__names'><span class="name_body">Рекомендуем</span></a>
                <img src="../img/minibanner.jpg">
                <span class="close_container"></span>
            </div>
            <div class="rates-container">
                <a class='filter__names'><span class="name_body">Фильтры по рейтам&#128269;</span></a>
                <div class="rates_buttons">
                    <a class="filter filter_rates">x1</a>
                    <a class="filter filter_rates">x3</a>
                    <a class="filter filter_rates">x5</a>
                    <a class="filter filter_rates">x10</a>
                    <a class="filter filter_rates">x25</a>
                    <a class="filter filter_rates">x50</a>
                    <a class="filter filter_rates">x100</a>
                    <a class="filter filter_rates">x100-x1200</a>
                    <a class="filter filter_rates">x1200+</a>
                </div>
                <span class="close_container"></span>
            </div>
        </div>
    </content>
</div>
</body>
</html>
