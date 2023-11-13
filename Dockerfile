FROM tomsik68/xampp:8

LABEL name="alticcifront"
COPY *.php /www
EXPOSE 41062