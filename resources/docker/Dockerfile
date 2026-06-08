# syntax=docker/dockerfile:1
#
# Local-development image for the IDE stubs, modeled on phalcon/cphalcon's dev
# image. It uses PHP-FPM so `docker compose up -d` keeps the container running
# and you can `docker exec -it <container> bash` to update Composer and run the
# validation (Psalm / PHP_CodeSniffer). The stubs are plain PHP, so this only
# needs PHP, Composer, and the extensions the tooling and the stubs reference.
# No Zephir, no compiled extension, no databases.
ARG PHP_VERSION=8.3

FROM php:${PHP_VERSION}-fpm AS dev

ARG UID=1000
ARG GID=1000
ARG USER=phalcon
ARG GROUP=phalcon

# hadolint ignore=DL3022
COPY --from=ghcr.io/mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
# hadolint ignore=DL3022
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

SHELL [ "/bin/bash", "-o", "pipefail", "-c" ]

# hadolint ignore=DL3008
RUN <<EOT
set -eux
# Extensions used by the validation tooling and referenced by the stubs:
#   mbstring, dom            - required by Psalm / PHP_CodeSniffer
#   zip                      - Composer archive handling
#   psr                      - native Psr\* interfaces the stubs reference
#   apcu, imagick, memcached, redis - native classes the stubs type-hint
#       (APCUIterator, Imagick*, Memcached, Redis, RedisCluster); without them
#       Psalm reports UndefinedClass for those wrapper adapters.
install-php-extensions mbstring dom zip psr apcu imagick memcached redis
# Dev conveniences for entering the container and managing the project.
apt-get update
apt-get install -yq --no-install-recommends git nano sudo unzip
# Development user that matches the host UID/GID so files written into the
# mounted project (vendor/, etc.) stay owned by the host user.
groupadd -g "${GID}" "${GROUP}"
useradd -l -u "${UID}" -g "${GID}" -m -d /home/"${USER}" -s /bin/bash "${USER}"
install -d -m 0775 -o "${USER}" -g "${GROUP}" /app
# Run PHP-FPM as the development user so the daemon (which keeps the container
# alive) runs cleanly under a non-root USER.
sed -i -E "s/^;?[[:space:]]*user = www-data/user = ${USER}/"   /usr/local/etc/php-fpm.d/www.conf
sed -i -E "s/^;?[[:space:]]*group = www-data/group = ${GROUP}/" /usr/local/etc/php-fpm.d/www.conf
install -d -m 0770 -o "${USER}" -g "${GROUP}" /run/php
# Unlimited memory for the tooling.
echo 'memory_limit = -1' > /usr/local/etc/php/conf.d/zz-memory.ini
# Passwordless sudo for the dev group.
echo "%${GROUP} ALL=(ALL) NOPASSWD:ALL" > /etc/sudoers.d/${USER}
chmod 0440 /etc/sudoers.d/${USER}
# Cleanup.
apt-get clean
rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
EOT

# Developer shell aliases / PATH, sourced by interactive `docker exec … bash`.
COPY --chown=${USER}:${GROUP} resources/docker/.bashrc /home/${USER}/.bashrc

WORKDIR /app
USER ${USER}
