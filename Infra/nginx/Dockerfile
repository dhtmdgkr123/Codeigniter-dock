FROM nginx:1.17.3-alpine

LABEL version="1.0.0"
LABEL author="dhtmdgkr123"
LABEL email="osh12201@gmail.com"

EXPOSE 80
EXPOSE 443

COPY /nginx/sites/default.vhost /etc/nginx/conf.d/default.conf
RUN mkdir -p /var/www
