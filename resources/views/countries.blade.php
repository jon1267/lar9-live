<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Countries & Continents</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/js/app.js'])

    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h4>World Countries</h4>
                @livewire('countries')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    @livewireScripts
    <script>
        window.addEventListener('OpenAddCountryModal', function () {
            $('.addCountry').find('div.text-danger').html('');
            $('.addCountry').find('form#continent-country-city')[0].reset();
            $('.addCountry').modal('show');
        });

        window.addEventListener('CloseAddCountryModal', function () {
            $('.addCountry').find('div.text-danger').html('');
            $('.addCountry').find('form#continent-country-city')[0].reset();
            $('.addCountry').modal('hide');
            //alert('New Country Has been Saved Successfully');
        });

        window.addEventListener('OpenEditCountryModal', function (e) {
            $('.editCountry').find('div.text-danger').html('');
            $('.editCountry').modal('show');
        });

        window.addEventListener('CloseEditCountryModal', function () {
            $('.editCountry').find('div.text-danger').html('');
            $('.editCountry').find('form#continent-country-city')[0].reset();
            $('.editCountry').modal('hide');
            //alert('New Country Has been Saved Successfully');
        });

    </script>
</body>
</html>
