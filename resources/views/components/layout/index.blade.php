<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.scss')
    <meta name=”description” content="Product Manager apaixonado por inovação e impacto positivo. Líder operacional no marketing da ADVBOX, aplicando conhecimentos de Product Management para impulsionar estratégias eficazes.">

    {{-- OGTAG --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Combizera" />
    <meta property="og:image" content="{{ asset('image-preview.png')}}" />
    <meta property="og:url" content="https://combizera.com" />
    <meta property="og:site_name" content="Combizera" />
    <meta property="og:description" content="Product Manager apaixonado por inovação e impacto positivo. Líder operacional no marketing da ADVBOX, aplicando conhecimentos de Product Management para impulsionar estratégias eficazes." />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4C1JN2HCGJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-4C1JN2HCGJ');
    </script>

    {{-- TIPOGRAFIA --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body @isset($bodyClass) @class($bodyClass) @endisset>

    <!--
 ▄████████  ▄██████▄    ▄▄▄▄███▄▄▄▄   ▀█████████▄   ▄█   ▄███████▄     ▄████████    ▄████████    ▄████████
███    ███ ███    ███ ▄██▀▀▀███▀▀▀██▄   ███    ███ ███  ██▀     ▄██   ███    ███   ███    ███   ███    ███
███    █▀  ███    ███ ███   ███   ███   ███    ███ ███▌       ▄███▀   ███    █▀    ███    ███   ███    ███
███        ███    ███ ███   ███   ███  ▄███▄▄▄██▀  ███▌  ▀█▀▄███▀▄▄  ▄███▄▄▄      ▄███▄▄▄▄██▀   ███    ███
███        ███    ███ ███   ███   ███ ▀▀███▀▀▀██▄  ███▌   ▄███▀   ▀ ▀▀███▀▀▀     ▀▀███▀▀▀▀▀   ▀███████████
███    █▄  ███    ███ ███   ███   ███   ███    ██▄ ███  ▄███▀         ███    █▄  ▀███████████   ███    ███
███    ███ ███    ███ ███   ███   ███   ███    ███ ███  ███▄     ▄█   ███    ███   ███    ███   ███    ███
████████▀   ▀██████▀   ▀█   ███   █▀  ▄█████████▀  █▀    ▀████████▀   ██████████   ███    ███   ███    █▀
                                                                                   ███    ███
-->

    {{-- HEADER --}}
    <x-header></x-header>

    {{-- CONTEÚDO --}}
    {{ $slot }}

    {{-- FOOTER --}}
    <x-footer></x-footer>

    @vite('resources/js/app.js')
    @isset($scripts)
      {{ $scripts }}
    @endisset

  </body>
</html>
