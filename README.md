# Laravel SEO Package

A simple and flexible SEO meta manager for Laravel applications.  
Easily manage meta tags, Open Graph, Twitter cards, canonical URLs, and more for any Laravel project.

---

## 📦 Installation

Require the package via Composer:

```bash
composer require wall-e/laravel-seo
```

## ⚙️ Configuration

Publish the configuration file to customize defaults:

```bash 
php artisan vendor:publish --provider="WallE\LaravelSeo\SeoServiceProvider" --tag=config 
```

This will create config/seo.php where you can set default meta values:

```bash 
return [
    'title' => 'Default Site Title',
    'description' => 'Default description for your site.',
    'keywords' => 'laravel, seo, ecommerce',
    'author' => 'Your Name',
    'developer' => 'Your Company',
    'contact' => 'info@example.com',
    'og_image' => asset('assets/frontend/media/common/logo.png'),
    'twitter_site' => '@yourtwitterhandle',
    'robots' => 'index, follow',
];
```

## 🛠️ Usage
Set meta tags in a controller

You can set meta tags dynamically in your controllers:

```bash 
use WallE\LaravelSeo\Facades\Seo;

Seo::set('title', $product->name)
   ->set('description', $product->short_description)
   ->set('keywords', 'shop, ecommerce, ' . $product->category->name)
   ->set('og_image', $product->image_url)
   ->set('twitter_site', '@yourtwitterhandle');
```

Include meta tags in Blade templates

Add this in the <head> section of your layout:

```bash 
@include('seo::meta')
```
This automatically renders all basic meta tags, Open Graph, Twitter cards, and canonical URLs.


## 🌐 Features

- Fully manage basic meta tags: title, description, keywords, author, developer, contact, copyright

- Open Graph support for Facebook, LinkedIn, etc.

- Twitter card support

- Canonical URL support

- Fully configurable defaults via config/seo.php

- Reusable in any Laravel project

- Optimized for SEO and social media sharing


## 🔧 Customizing Views

If you want to customize the Blade template for meta tags:

```bash 
php artisan vendor:publish --provider="WallE\LaravelSeo\SeoServiceProvider" --tag=views
```

- The view will be copied to resources/views/vendor/seo/meta.blade.php.

- You can edit it to change the HTML structure of meta tags.


## 📝 Contributing

Fork the repository and submit pull requests.

Bug reports, feature requests, and improvements are welcome.

Make sure to follow semantic versioning for updates.


## 📜 License

MIT License. See the [LICENSE](LICENSE) file for details.


## 🔗 Links

Packagist: https://packagist.org/packages/wall-e/laravel-seo

GitHub Repository: https://github.com/Rahman-Shaikat/laravel-seo.git

---
