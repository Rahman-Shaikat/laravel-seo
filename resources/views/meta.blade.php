<!-- Basic Meta Tags -->
<meta charset="{{ seo()->get('charset') }}">
<meta name="viewport" content="{{ seo()->get('viewport') }}">
<meta name="description" content="{{ seo()->get('description') }}">
<meta name="keywords" content="{{ seo()->get('keywords') }}">
<meta name="author" content="{{ seo()->get('author') }}">
<meta name="developer" content="{{ seo()->get('developer') }}">
<meta name="resource-type" content="{{ seo()->get('resource_type') }}">
<meta name="contact" content="{{ seo()->get('contact') }}">
<meta name="copyright" content="{{ seo()->get('copyright') }}">

<!-- Robots and Crawlers -->
<meta name="robots" content="{{ seo()->get('robots') }}">
<meta name="googlebot" content="{{ seo()->get('googlebot') }}">
<meta name="googlebot-news" content="{{ seo()->get('googlebot_news') }}">
<meta name="msnbot" content="{{ seo()->get('msnbot') }}">

<!-- Open Graph Meta Tags -->
<meta property="fb:app_id" content="{{ seo()->get('fb_app_id') }}">
<meta property="og:site_name" content="{{ seo()->get('og_site_name') }}">
<meta property="og:url" content="{{ seo()->get('canonical') ?? url()->current() }}">
<meta property="og:type" content="{{ seo()->get('og_type') }}">
<meta property="og:title" content="{{ seo()->get('title') }}">
<meta property="og:description" content="{{ seo()->get('description') }}">
<meta property="og:image" content="{{ seo()->get('og_image') }}">
<meta property="og:locale" content="{{ seo()->get('og_locale') }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="{{ seo()->get('twitter_card') }}">
<meta name="twitter:title" content="{{ seo()->get('title') }}">
<meta name="twitter:description" content="{{ seo()->get('description') }}">
<meta name="twitter:image" content="{{ seo()->get('og_image') }}">
<meta name="twitter:site" content="{{ seo()->get('twitter_site') }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ seo()->get('canonical') ?? url()->current() }}">

<!-- Image Preview -->
<link rel="image_src" href="{{ seo()->get('image_src') }}">
