<p align="center"><img src="https://www.shareicon.net/data/128x128/2015/10/06/112721_development_512x512.png"></p>

## Sobre este projeto

Este repositório é para o site do http://fossday.org. Um evento comunitário que é realizado
em Lajeado/RS.

Caso tenha interesse em contribuir, deixe sem Pull Request :-)


## TL;DR (Too Long, Didn't Read) - Longo demais, não li

Baixe Docker com o comando mágico (funciona somente em Sistemas Operacionais). Windows, sorry :-)

```bash
curl -fsSL https://get.docker.com/ | sh
```

## Como obter Docker?

- [Link para documentação oficial](https://docs.docker.com/install/)
    - [Instalando em Windows](https://docs.docker.com/docker-for-windows/install/)
    - [Instalando em Debian](https://docs.docker.com/install/linux/docker-ce/debian/)
    - [Instalando em Ubuntu](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
    - [Instalando em MacOS](https://docs.docker.com/docker-for-mac/install/)

## Como criar uma imagem

Construa a imagem que irá rodar com o comando abaixo

```bash
docker build -t fossday/gohugo .
```

## Como publicar o conteúdo do site

Publicação de código, ou seja, transforma todos os arquivos.md para HTML

```bash
docker run -it -v $(pwd)/site:/src -v $(pwd)/public:/src/public fossday/gohugo
```

## Como rodar um servidor

Aqui é possível rodar Hugo em modo servidor

```bash
docker run -it -v $(pwd)/site:/src -v $(pwd)/public:/src/public -p 1313:1313 fossday/gohugo /gohugo.sh -s
```
