<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Florian Reumont">

    <title>{{ config('app.name') }}</title>
    <meta name="description" content=""/>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    @yield('css')

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <header></header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer_wrapper">
            <div class="footer_menus">
                <div class="footer_menus_part position-end">
                    <p class="footer_menus_part_title">Contact Us</p>
                    <div class="footer_menus_part_content">
                        <div class="footer_menus_part_content_element position-end">
                            <p class="footer_menus_part_content_element_title">Email</p>
                            <a href="mailto:needhelp@Organia.com">needhelp@Organia.com</a>
                        </div>
                        <div class="footer_menus_part_content_element position-end">
                            <p class="footer_menus_part_content_element_title">Phone</p>
                            <a href="tel:+33666888888">666 888 888</a>
                        </div>
                        <div class="footer_menus_part_content_element position-end">
                            <p class="footer_menus_part_content_element_title">Address</p>
                            <p>88 road, borklyn street, USA</p>
                        </div>
                    </div>
                </div>
                <div class="footer_menus_part position-center">
                    <p class="footer_menus_part_title">
                        <img src="{{asset('assets/logo.svg')}}" alt="logo">
                        <span>Organick</span>
                    </p>
                    <div class="footer_menus_part_content">
                        <div class="footer_menus_part_content_element position-center">
                            <p>Simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum simply dummy text of the printing</p>
                        </div>
                        <div class="footer_menus_part_content_socials position-center">
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/instagram.svg')}}" alt="instagram">
                            </a>
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/facebook.svg')}}" alt="facebook">
                            </a>
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/twitter.svg')}}" alt="twitter">
                            </a>
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/pinterest.svg')}}" alt="pinterest">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer_menus_part position-start">
                    <p class="footer_menus_part_title">Utility Pages</p>
                    <div class="footer_menus_part_content position-start">
                        <a href="#">Style Guide</a>
                        <a href="#">404 Not Found</a>
                        <a href="#">Password Protected</a>
                        <a href="#">Licences</a>
                        <a href="#">Changelog</a>
                    </div>
                </div>
            </div>
            <p class="footer_copyright">Copyright © <span>Organick</span> | Designed by <span>VictorFlow</span> Templates - Powered by <span>Webflow</span></p>
        </div>
    </footer>

    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
    @yield('js')
</body>
</html>