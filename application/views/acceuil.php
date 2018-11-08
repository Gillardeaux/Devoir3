<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Devoir Region</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='JQuery/jquery-3.1.1.js'> </script>
    <script src='JS/mesFonctions.js'> </script>
    <script>
        $(
            function()
            {
                $('input[name=login]').click(function()
                {
                    afficherLesRegions();
                });
            }
        );

    </script>
</head>
<body>
    <h1>Devoir Region</h1>

    <input type='text' value='Entrez votre nom' name='login'> <br><br>
    <input type='button' value='Connexion' name='connexion' onclick='afficherLesRegions()'>

    <div id="region"></div>

</body>
</html>