## Criando um projeto GO Hugo do zero

Se é primeira vez que está construindo um projeto com Hugo, devemos criar o esqueleto básico para termos a estrutura de diretórios

```bash
docker run --rm -detached --volume $(pwd)/site:/go/fossday fossday/gohugo /go/bin/hugo new site fossday
```

Clone um template para dentro do diretório de themes

```bash
git clone https://github.com/jweslley/hugo-conference.git site/themes/hugo-conference
```
