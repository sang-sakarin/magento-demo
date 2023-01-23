FROM webdevops/php-apache-dev:8.1-alpine
# for m1
# FROM formatdgmbh/webdevops-php-apache-dev:8.1


# RUN wget -O "/usr/local/bin/go-replace" "https://github.com/webdevops/goreplace/releases/download/1.1.2/gr-arm64-linux" \
#     && chmod +x "/usr/local/bin/go-replace" \
#     && "/usr/local/bin/go-replace" --version

# RUN echo "Mutex posixsem" >> /etc/apache2/apache2.conf
# RUN echo "Mutex posixsem" >> /etc/apache2/apache2.conf
# RUN echo "Mutex posixsem" >> /etc/apache2/httpd.conf

# memory
ENV PHP_MEMORY_LIMIT=4096M

# php-fpm
ENV FPM_MAX_REQUESTS=500
ENV FPM_PM_MAX_CHILDREN=32
ENV FPM_PM_START_SERVERS=8
ENV FPM_PM_MIN_SPARE_SERVERS=8
ENV FPM_PM_MAX_SPARE_SERVERS=16
ENV FPM_REQUEST_TERMINATE_TIMEOUT=60
ENV FPM_PROCESS_IDLE_TIMEOUT=10
RUN echo 'access.format = "%{REMOTE_ADDR}e - [%t] \"%m %{REQUEST_URI}e\" %s cpu:%C%% mem:%{megabytes}M reqTime:%{seconds}d"' \
    >> /opt/docker/etc/php/fpm/pool.d/application.conf