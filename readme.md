<p align="center"><img src="https://cdn2.iconfinder.com/data/icons/oxygen/128x128/apps/tux.png"></p>

<p align="center">
<a href="https://travis-ci.org"><img src="https://felixrieseberg.gallerycdn.vsassets.io/extensions/felixrieseberg/vsc-travis-ci-status/1.1.0/1489588030200/Microsoft.VisualStudio.Services.Icons.Default" alt="Travis CI"></a>
<a href="https://docker.com"><img src="https://bitbucket-assetroot.s3.amazonaws.com/c/photos/2016/Nov/07/2479042169-6-fenics-dev-docker-logo_avatar.png" alt="Docker"></a>

</p>

## Sobre este projeto

Este repositório é para o site do http://fossday.org. Um evento comunitário que é realizado
em Lajeado/RS.


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
docker run -it -v $(pwd):/src -v $(pwd)/public:/src/public -p 1313:1313 fossday/gohugo
```

## Como rodar um servidor

Aqui é possível rodar Hugo em modo servidor

```bash
docker run -it -v $(pwd):/src -v $(pwd)/public:/src/public -p 1313:1313 fossday/gohugo /gohugo.sh -s
```