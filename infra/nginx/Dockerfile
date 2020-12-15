FROM nginx:1.18-alpine

COPY ./infra/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY ./backend /work

EXPOSE 80
