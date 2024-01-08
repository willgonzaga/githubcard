<h1>Github Card API</h1>

Esta é uma API publica feita em Laravel(PHP) para geração de cards de repositório como este:

<img src="https://githubrepocard.vercel.app/apis/githubcard?user=willgonzaga&repo=githubcard">

Para utilizar referencie o URL da imagem para:

```
https://githubrepocard.vercel.app/apis/githubcard?user=<usuario>&repo=<repositorio>
```

A mesma também é OpenSource, portanto caso deseje utilizar basta executar o comando:

```
git clone https://github.com/willgonzaga/githubcard
```

Adicione a variavel `TOKENGITHUB` com o valor do seu token de acesso do github ao seu arquivo `.env`.

Após isso execute os comando de instalação de pacotes e inicialização do Laravel:

```
composer install
php artisan serve
```

Utilizando a rota `/apis/githubcard` ou `/api/githubcard` será possivel gerar os mesmos cards de repositório.
