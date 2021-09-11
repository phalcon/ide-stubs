# Phalcon IDE Stubs

This repo provides the most complete Phalcon Framework stubs which enables autocompletion in modern IDEs.

## Installing via Composer

```bash
composer require --dev phalcon/ide-stubs
```

## Installing via Git

1. Clone the Phalcon IDE Stubs repository in a common location.
2. Setup your IDE.

## How to update stubs

1. Generate stubs inside `cphalcon` project
```bash
php zephir.phar fullclean
php zephir.phar generate
php zephir.phar stubs
```

2. Replace `.zep` inside generated `.php` files

```bash
find ide/ -type f -exec rename 's/\.zep//' '{}' \;
```

3. Copy all files from `ide/%version%/Phalcon/` folder in `cphalcon` project
4. Paste inside `src/` folder in `ide-stubs` project

## Sponsors

Become a sponsor and get your logo on our README on Github with a link to your site. [[Become a sponsor](https://opencollective.com/phalcon#sponsor)]

<a href="https://opencollective.com/phalcon/#contributors">
<img src="https://opencollective.com/phalcon/tiers/sponsors.svg?avatarHeight=48&width=800">
</a>

## Backers

Support us with a monthly donation and help us continue our activities. [[Become a backer](https://opencollective.com/phalcon#backer)]

<a href="https://opencollective.com/phalcon/#contributors">
<img src="https://opencollective.com/phalcon/tiers/backers.svg?avatarHeight=48&width=800&height=200">
</a>

## License

Phalcon IDE Stubs is open-sourced software licensed under the New BSD License. © Phalcon Framework Team and contributors.
