FROM php:8.2-fpm

# Установка cron и других зависимостей
RUN apt-get update && apt-get install -y cron \
    && docker-php-ext-install pdo_mysql

# # Копирование cron-задачи
# COPY ./laravel-cron /etc/cron.d/laravel-cron

# # Установка прав для cron-файла
# RUN chmod 0644 /etc/cron.d/laravel-cron

# # Регистрация cron-задачи
# RUN crontab /etc/cron.d/laravel-cron

# Запуск cron в фоновом режиме и php-fpm
# CMD ["sh", "-c", "cron && php-fpm"]
