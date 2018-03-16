FROM alpine:3.4

LABEL description="Docker container for building static sites with the Hugo."
LABEL maintainer="Rafael Dutra <raffaeldutra@gmail.com>"

ENV HUGO_VERSION 0.26
ENV HUGO_BINARY hugo_${HUGO_VERSION}_linux-64bit

# Install pygments (for syntax highlighting) and bash
RUN apk update && apk add py-pygments && apk add bash && rm -rf /var/cache/apk/*

# Download and Install hugo
RUN mkdir /usr/local/hugo
ADD https://github.com/spf13/hugo/releases/download/v${HUGO_VERSION}/${HUGO_BINARY}.tar.gz /usr/local/hugo/
RUN tar xzf /usr/local/hugo/${HUGO_BINARY}.tar.gz -C /usr/local/hugo/ \
	&& ln -s /usr/local/hugo/hugo /usr/local/bin/hugo \
	&& rm /usr/local/hugo/${HUGO_BINARY}.tar.gz

EXPOSE 1313

COPY ./gohugo.sh /gohugo.sh

CMD ["/gohugo.sh", "-p"]
