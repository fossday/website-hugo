# Contribua com nossa imagem e deixe seu nome gravado aqui :-)
# Rafael Dutra <raffaeldutra@gmail.com>

FROM golang

RUN go get github.com/kardianos/govendor
RUN govendor get github.com/gohugoio/hugo
RUN go install github.com/gohugoio/hugo

COPY ./gohugo.sh /gohugo.sh
VOLUME /src/public

CMD ["/gohugo.sh", "-p"]
