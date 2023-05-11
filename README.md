# Banking System

Projeto para faculdade: uma implementação de um sistema bancário totalmente operável.

## Tecnologias utilizadas

Docker, PHP, Laravel, Livewire, MariaDB.

## Pré-requisitos

Docker com plugin ```compose```, composer para gerenciar as depedências, PHP 8.1,

## Instalação

1 - Instalar Git:

https://git-scm.com/download/win

2 - Clonar projeto github:

git clone https://github.com/Tayouza/banking-system.git

link repositório: https://github.com/Tayouza/banking-system

3 - Configurar .env (variáveis de ambiente):

Fazer uma cópia do arquivo .env.example com o nome .env

Alterar as variáveis:
```
DB_HOST=mariadb
DB_USERNAME=sail
DB_PASSWORD=password
```
4 - Instalar WSL:

Abrir Power Shell em modo administrador, inserir o comando:
```
wsl --install
```
5 - Fazer download do Docker Desktop

https://www.docker.com/products/docker-desktop/

6 - Instalar PHP 8.2:

https://www.youtube.com/watch?v=xiHkU6dylOs

em php.ini descomentar também extension=pdo_mysql, extension=fileinfo, extension=curl, extension=gd,  extension=openssl e extension=zip

7 - Instalar Composer (gerenciador de bibliotecas PHP):

https://getcomposer.org/Composer-Setup.exe

8 - Abrir a pasta do projeto no wsl:
```
Exemplo: cd /mnt/c/Users/{Seu usuário}/Documents/banking-system
```
(o meu caminho que fica dentro de documentos)

Digitar o comando no Power Shell:
```
composer update
```
Quando terminar acessar o wsl através do Power Shell Digitando:
```
wsl
wsl.exe -l -v
```
Verifique se você possui uma distro Ubuntu instalada. Pode acontecer de a distro estar por padrão no docker-desktop e essa Distro não possui bin bash por isso não funcionam comandos como o “.\vendor\bin\sail up -d“.

Para resolver essa situação você vai precisar instalar uma distro Linux para o WSL:
```
wsl --install -d Ubuntu
```
Para setar a Distro Ubuntu como default:
```
wsl -s Ubuntu
```
Acesse o Ubuntu para configurar um usuário de acesso. Digite no terminal do Power Shell:
```
ubuntu
```
Defina o usuário com letra minúscula (não pode maiúscula). Não esqueça seu usuário e senha por nada nessa vida.

Feito isso vamos voltar ao wsl. Digite:
```
wsl
```
O power shell vai ficar verde e agora você precisa navegar por dentro do wsl até a pasta banking-system. cd /mnt/c/Users/{Seu usuário}/Documents/banking-system

Com o aplicativo Docker Desktop que instalamos anteriormente ABERTO e de preferência Logado com seu usuário, você vai executar os comandos a seguir:
```
./vendor/bin/sail up -d (demora pra caramba, uns 25min no 4/11)
./vendor/bin/sail artisan key:generate
./vendor/bin/sail npm update
./vendor/bin/sail npm run build
```

## Contribuição



## Licença

MIT License
