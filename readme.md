# API RESTFULL

>Api restfull para cadastro de urls, possui autenticação por basic auth.

>Sistema para armazenar urs por. Pode se cadastrar, excluir, e alterar urls. 

## Instalando o projeto

Primeiro é necessário clonar:

```sh
$ git clone git@bitbucket.org:dinosaurdead/laravel-api-url.git
```
Depois de clonado entre na pasta do projeto e baixe as dependências

```sh
cd laravel-login

php composer.phar install
```

## Configurando os dados de acesso

Primeiro tem de criar o arquivo .env, na raiz do projeto, e inserir as configurações do seu projeto.
exemplo de arquivo .env:
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=studies
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
Agora é necessário gerar um app_key.

na raiz do projeto digite:
```sh
php artisan key:generate
```

## Rodando as migrations

Primeiro crie a tabela que criará o controle das migrations
```sh
php artisan migrate:install
```
Execute as migrations
```sh
php artisan migrate
```

## Criando usuário e link de teste

Caso queria criar usuário e link de teste rode as seed
```sh
php artisan db:seed
```
Para rodar um seed especifico
```sh
php artisan db:seed --class=UserTableSeeder
```

## Rodando o projeto

na raiz do projeto digite:
```sh
php artisan serve
```
Ao rodar o código acima irá subir um server na porta que estiver disponível,portanto pode ser em uma porta diferente da utilizada na documentação.

## Documentação

| **Urls** |||
 ------------ | :-----------: | -----------: |
 |  |*Urls:* Esta coleção de endpoints manipula as urls||
**Method**        |   **Endpoint**    | **action**|
*GET*       |   /api/v1/urls/{id}    |         List |
*POST*       |   /api/v1/urls/    |         Create |
*PUT*       |   /api/v1/urls/{id}    |         Update |
*DEL*       |   /api/v1/urls/{id}    |         Delete |

Os Métodos *POST* e *PUT* precisam do raw body. Exemplo:

```json
{
    "link": "google.com.br",
    "title": "Google",
    "description": "Maior site de buscas!"
}
```