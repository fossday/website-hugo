<p align="center"><img src="https://www.shareicon.net/data/128x128/2015/10/06/112721_development_512x512.png"></p>


<p align="center">
<a href="https://travis-ci.org/fossday/site"><img src="https://travis-ci.org/fossday/site.svg?branch=develop" alt="Build Status"></a>
<a href="https://img.shields.io/badge/License-GPL%20v3-blue.svg"><img src="https://img.shields.io/badge/License-GPL%20v3-blue.svg" alt="License"></a>
</p>

- [Sobre este projeto](#sobre-este-projeto)
- [TL;DR (Too Long, Didn't Read)](#tldr-too-long-didnt-read)
- [Como obter Docker?](#como-obter-docker)
- [Como publicar o site](#como-publicar-o-site)
- [Como rodar um servidor](#como-rodar-um-servidor)


<a name="sobre-este-projeto"></a>
# Sobre este projeto

Este repositório é para o site do http://fossday.org. Um evento comunitário que é realizado
em Lajeado/RS.

Caso tenha interesse em contribuir, deixe sem Pull Request :-)


<a name="too-long"></a>
## TL;DR (Too Long, Didn't Read)

Baixe Docker com o comando mágico (funciona somente em Sistemas Operacionais). Windows, sorry :-)

```bash
curl -fsSL https://get.docker.com/ | sh
```

<a name="como-obter-docker"></a>
## Como obter Docker?

- [Link para documentação oficial](https://docs.docker.com/install/)
    - [Instalando em Windows](https://docs.docker.com/docker-for-windows/install/)
    - [Instalando em Debian](https://docs.docker.com/install/linux/docker-ce/debian/)
    - [Instalando em Ubuntu](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
    - [Instalando em MacOS](https://docs.docker.com/docker-for-mac/install/)

<a name="como-publicar-site"></a>
## Como publicar o site

Publicação de código, ou seja, transforma todos os arquivos.md para HTML

```bash
docker run -it \
-v $(pwd)/site:/src \
dd-v $(pwd)/site/public:/src/public \
raffaeldutra/docker-gohugo
```

Se você precisar de mais arquivos de configuração para rodar tanto em sua máquina local ou em Docker, passe como último parâmetro. Exemplo:

```bash
docker run -it \
-v $(pwd)/site:/src \
dd-v $(pwd)/site/public:/src/public \
raffaeldutra/docker-gohugo -p novo-arquivo.toml
```

<a name="como-rodar-um-servidor"></a>
## Como rodar um servidor

Aqui é possível rodar Hugo em modo servidor

```bash
docker run -it \
-v $(pwd)/site:/src \
-p 1313:1313 \
raffaeldutra/docker-gohugo /gohugo.sh
```

Se você precisar de mais arquivos de configuração para rodar tanto em sua máquina local ou em Docker, passe como último parâmetro. Exemplo:

```bash
docker run -it \
-v $(pwd)/site:/src \
-p 1313:1313 \
raffaeldutra/docker-gohugo /gohugo.sh -s novo-arquivo.toml
```
