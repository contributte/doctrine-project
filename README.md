![](https://heatbadger.now.sh/github/readme/contributte/doctrine-project/)

<p align=center>
  <a href="https://github.com/contributte/doctrine-project/actions"><img src="https://badgen.net/github/checks/contributte/doctrine-project/master"></a>
  <a href="https://coveralls.io/r/contributte/doctrine-project"><img src="https://badgen.net/coveralls/c/github/contributte/doctrine-project"></a>
  <a href="https://packagist.org/packages/contributte/doctrine-project"><img src="https://badgen.net/packagist/dm/contributte/doctrine-project"></a>
  <a href="https://packagist.org/packages/contributte/doctrine-project"><img src="https://badgen.net/packagist/v/contributte/doctrine-project"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/contributte/doctrine-project"><img src="https://badgen.net/packagist/php/contributte/doctrine-project"></a>
  <a href="https://github.com/contributte/doctrine-project"><img src="https://badgen.net/github/license/contributte/doctrine-project"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

<p align=center>
	<img src="https://api.microlink.io?url=https%3A%2F%2Fexamples.contributte.org%2Fdoctrine-project%2F&overlay.browser=light&screenshot=true&meta=false&embed=screenshot.url"></img>
</p>

----

https://github.com/user-attachments/assets/4a761337-38c9-4ecb-b790-84bcf6df2e65

-----

## Goal

Minimal viable project with Doctrine to Nette ([@nette](https://github.com/nette)) by [@f3l1x](https://github.com/f3l1x).

## Demo

https://examples.contributte.org/doctrine-project/

## Installation

You will need `PHP 8.2+` and [Composer](https://getcomposer.org/).

Create project using composer.

```bash
composer create-project -s dev contributte/doctrine-project acme
```

Now you have application installed. It's time to run it.

## Startup

The easiest way is to use php built-in web server.

```bash
php -S 0.0.0.0:8000 -t www
```

Then visit [http://localhost:8000](http://localhost:8000) in your browser.

You have to spin up PostgreSQL database. It will load `init.sql` file, thus you don't have to create schema manually.

```bash
docker compose up
```

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this project.
