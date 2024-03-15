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
    <header class="header">
        <div class="header_wrapper">
            <a class="header_logo" href="#" title="Home">
                <img src="{{asset('assets/logo.svg')}}" alt="logo" loading="lazy" width="30">
                <span>Organick</span>
            </a>
            <nav class="header_nav">
                <ul class="header_nav_list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </nav>
            <div class="header_tools">
                <div class="header_tools_searchbar">
                    <input type="text">
                    <button>
                        <img src="{{asset('assets/icons/search.svg')}}" alt="search" width="16">
                    </button>
                </div>
                <button class="header_tools_cart">
                    <div class="header_tools_cart_image">
                        <img src="{{asset('assets/icons/cart.svg')}}" alt="cart" width="16">
                    </div>
                    <span>Cart (0)</span>
                </button>
            </div>
        </div>
    </header>

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
                        <img src="{{asset('assets/logo.svg')}}" alt="logo" loading="lazy" width="30">
                        <span>Organick</span>
                    </p>
                    <div class="footer_menus_part_content">
                        <div class="footer_menus_part_content_element position-center">
                            <p>Simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum simply dummy text of the printing</p>
                        </div>
                        <div class="footer_menus_part_content_socials position-center">
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/instagram.svg')}}" alt="instagram" loading="lazy" width="16">
                            </a>
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/facebook.svg')}}" alt="facebook" loading="lazy" width="16">
                            </a>
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/twitter.svg')}}" alt="twitter" loading="lazy" width="16">
                            </a>
                            <a class="footer_menus_part_content_socials_image" href="#" target="_blank">
                                <img src="{{asset('assets/icons/pinterest.svg')}}" alt="pinterest" loading="lazy" width="16">
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