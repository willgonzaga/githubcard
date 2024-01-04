<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Github Card Api - willgonzaga</title>
    </head>
    <body>
        <form id="formGithubCard" method="get">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user">
            <label for="repo">Repositório</label>
            <input type="text" id="repo" name="repo">
            <button type="button" onclick="getGithubCard()">Enviar</button>
        </form>
        <script>
            function getGithubCard() {
                let user = document.getElementById('user').value;
                let repo = document.getElementById('repo').value;

                document.getElementById('formGithubCard').action = `apis/githubcard?user=${user}/repo=${repo}`;
                document.getElementById('formGithubCard').submit();
            }
        </script>
    </body>
</html>
