#!/usr/bin/env bash
# Rafael Dutra <raffaeldutra@gmail.com>
# http://rafaeldutra.me

# Se OS for Microsoft, utilizamos o endereço geralmente utilizado por ele
# Atente que: se estiver utilizando Hyper-V, por favor adapte o código e
# faça o Pull Request para abrangermos o maior número possível de Sistemas
# Operacionais possíveis.
if [ "${OSTYPE}"  = "msys" ]; then
    declare url="http://192.168.99.100"
# Em caso de o Sistema Operacional for algum Linux, Mac, FressBSD e etc
# utilizamos o localhost
else
    declare url="http://localhost:1313"
fi

# -p para Publish (publicar conteúdo), ou seja, pega todos arquivos .md e
# transforma para  HTML
if [ "${1}" = "-p" ]; then
    hugo \
    --layoutDir \
    /src/layouts \
    --config /src/config.yml \
    --themesDir /src/themes \
    --contentDir /src/content \
    --ignoreCache \
    --destination /src/public

# -p para Server (rodar servidor)
elif [ "${1}" = "-s" ]; then
    hugo server \
    --watch true \
    --bind 0.0.0.0 \
    --config /src/config.yml \
    --layoutDir /src/layouts \
    --themesDir /src/themes \
    --contentDir /src/content \
    --ignoreCache \
    --baseURL ${url}
fi

# Apenas informação para você saber em qual URL está rodando
echo $url
