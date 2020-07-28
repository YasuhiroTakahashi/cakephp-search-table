FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \
    git \
    zip unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) gd \
    && curl -s https://getcomposer.org/installer | php \
    # 編集メモ
    # cakephpプロジェクト作成時に、gitがないと怒られたので、gitをinstallするように追加
    # build時にcomposeをinstallするようにcurlコマンドを最後に追加
    # bin/cake server コマンドでintlがないと怒られたので、installするように調整
    # build時にicuがないと怒られたので、libicu-devをinstallするように調整
    # cakephpへアクセス時、DB dririverがないと怒られらたので、pdo_mysqlをinstallするように調整
    # warningでzipがないと注意されたのんで、installするように調整