<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Readex+Pro:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Readex+Pro:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://use.typekit.net/rcl7eij.css">
    <link rel="stylesheet" href="{{ $page->getUrl() . mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ $page->getUrl() . mix('js/main.js', 'assets/build') }}"></script>
  </head>
  <body>
    @yield('body')
  </body>
</html>
