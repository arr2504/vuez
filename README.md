# Vuez

<p align="center">
    <a href="https://packagist.org/packages/arr2504/vuez">
        <img src="https://img.shields.io/packagist/v/arr2504/vuez" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/arr2504/vuez">
        <img src="https://img.shields.io/packagist/l/arr2504/vuez" alt="License">
    </a>
</p>

## Introduction

Vuez provides a simple starting point for building a SPA (single-page application) using Vue or React with the Laravel framework. The code structure remains unchanged, and Vuez can be styled using either Bootstrap or Tailwind. Additionally, Vuez includes authentication controllers and views that can be easily customized to fit the needs of your application.

## Installation

Create a new Laravel application

```
composer create-project laravel/laravel example-app
```

Install Vuez using Composer

```
composer require arr2504/vuez
```

Once Vuez is installed, you may scaffold your application using one of the Vuez "stacks" discussed in the documentation below.

## Vue With Bootstrap

```
php artisan vuez:install bs

php artisan migrate
npm install
npm run dev / npm run build
```

## Vue With Tailwind

```
php artisan vuez:install tw

php artisan migrate
npm install
npm run dev / npm run build
```


## License

Vuez is open-sourced software licensed under the [MIT license](LICENSE.md).
