<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body style="font-family: Raleway, sans-serif;">
        <div style="max-width: 1000px; margin-left: auto; margin-right: auto; width: 100%;">
            <div style="text-align: center;">
                {{ $header ?? '' }}
            </div>

            <div>
                {{ $slot }}

                {{ $subcopy ?? '' }}
            </div>
        </div>
    </body>
</html>
