#!/usr/bin/env bash
# Rafael Dutra <raffaeldutra@gmail.com>
# http://rafaeldutra.me

docker build -t fossday/gohugo .

docker run --rm -detached --volume $(pwd)/site:/go/fossday fossday/gohugo /go/bin/hugo new site fossday

git clone https://github.com/jweslley/hugo-conference.git site/themes/