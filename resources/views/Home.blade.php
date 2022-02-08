<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/app.css">

        <title>Find Job</title>
    </head>

    <body class="antialiased">
        <div class="menu">
            <div class="site">
                FJ
            </div>

            <div class="home">
                <a href="{{ route('home') }}">Home</a>
            </div>

            <h2>Vacancies list</h2>

            <?php
                foreach (\App\Models\Vacancy::all() as $v)
                {
                    echo 'Company: ';
                    echo $v->company()->get()[0]->name;
/*
                    echo '\nPosition: ';
                    echo $v->position()->name;

                    echo '\nSchedule: ';
                    echo $v->schedule()->name;

                    echo '\nSalary: ';
                    echo $v->salary()->name;

                    echo '\nLocation: ';
                    echo $v->location()->city();

                    echo '\n<spoiler>Description: ';
                        echo $v->Description();
                        echo $v->Requirements();

                    echo '</spoiler>';*/
                }
            ?>

<!--
            <div class="account">
                <a href="{{ route('account') }}">Account</a>
            </div>-->
        </div>
    </body>

</html>
