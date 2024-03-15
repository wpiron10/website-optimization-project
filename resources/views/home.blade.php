@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('content')
<section class="hero">
    <div class="hero_wrapper">
        <p class="title_info">100% Natural Food</p>
        <h1 class="hero_heading">Choose the best healthier way of life</h1>
        <x-button color="tertiary" arrow="true" text="Explore Now" />
    </div>
</section>

<section class="infos">
    <div class="infos_wrapper">
        <div class="infos_card">
            <p class="title_info">Natural!!</p>
            <h3>Get Garden Fresh Fruits</h3>
        </div>
        <div class="infos_card">
            <p class="title_info">Offer!!</p>
            <h3>Get 10% off on Vegetables</h3>
        </div>
    </div>
</section>

<section class="about">
    <div class="about_wrapper">
        <div class="about_content">
            <p class="title_info">About Us</p>
            <h2>We Believe in Working Accredited Farmers</h2>
            <p>Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
            <div class="about_content_element">
                <div class="about_content_element_img">
                    <img src="{{asset('assets/icons/organic-foods.svg')}}" alt="" loading="lazy" width="50">
                </div>
                <div class="about_content_element_infos">
                    <h6>Organic Foods Only</h6>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                </div>
            </div>
            <div class="about_content_element">
                <div class="about_content_element_img">
                    <img src="{{asset('assets/icons/quality-standars.svg')}}" alt="" loading="lazy" width="50">
                </div>
                <div class="about_content_element_infos">
                    <h6>Quality Standards</h6>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                </div>
            </div>
            <x-button color="primary" arrow="true" text="Shop Now" />
        </div>
    </div>
</section>

<section class="products">
    <div class="products_wrapper">
        <div class="products_header">
            <p class="title_info">Categories </p>
            <h2>Our Products</h2>
        </div>
        <div class="products_content">
            @foreach ($products as $product)
            <div class="products_content_card">
                <div class="products_content_card_image">
                    <img src="{{asset('assets/images/'.$product['image'])}}" alt="{{$product['name']}}" loading="lazy" width="250">
                </div>
                <span class="products_content_card_tags">
                    @php
                    $i = 0;
                    $tags_result = '';
                    foreach ($product['tags'] as $tag) {
                    $i === 0 ? $tags_result = $tag : $tags_result .= ', ' . $tag;
                    $i++;
                    }
                    echo $tags_result;
                    @endphp
                </span>
                <div class="products_content_card_infos">
                    <p class="products_content_card_infos_title">{{$product['name']}}</p>
                    <div class="products_content_card_infos_bottom">
                        <span class="products_content_card_infos_bottom_price {{array_key_exists('promo', $product) ? 'products_content_card_infos_bottom_price--promo' : ''}}">${{number_format($product['price'], 2, ',')}}</span>
                        @if (array_key_exists('promo', $product))
                        <span class="products_content_card_infos_bottom_promo">${{number_format($product['promo'], 2, ',')}}</span>
                        @endif
                        <div class="products_content_card_infos_bottom_rating">
                            <span class="products_content_card_infos_bottom_rating_star"></span>
                            <span class="products_content_card_infos_bottom_rating_star"></span>
                            <span class="products_content_card_infos_bottom_rating_star"></span>
                            <span class="products_content_card_infos_bottom_rating_star"></span>
                            <span class="products_content_card_infos_bottom_rating_star"></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <x-button color="primary" arrow="true" text="Load More" />
    </div>
</section>

<section class="ecofriendly">
    <div class="ecofriendly_wrapper">
        <div class="ecofriendly_content">
            <p class="title_info">Eco Friendly</p>
            <h2>Econis is a Friendly Organic Store</h2>
            <div class="ecofriendly_content_part">
                <h6>Start with Our Company First</h6>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium. Sed ut perspiciatis.
                </p>
            </div>
            <div class="ecofriendly_content_part">
                <h6>Learn How to Grow Yourself</h6>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium. Sed ut perspiciatis.</p>
            </div>
            <div class="ecofriendly_content_part">
                <h6>Farming Strategies of Today</h6>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium. Sed ut perspiciatis.</p>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="news_wrapper">
        <div class="news_header">
            <div class="news_header_title">
                <p class="title_info">News</p>
                <h2>Discover weekly content about organic food, & more</h2>
            </div>
            <x-button color="transparent" arrow="true" text="More News" />
        </div>
        <div class="news_content">
            <div class="news_content_card">
                <div class="news_content_card_date">
                    <span>25<br>Nov</span>
                </div>
                <div class="news_content_card_infos">
                    <div class="news_content_card_infos_author">
                        <img src="{{asset('assets/icons/profil.svg')}}" alt="" loading="lazy" width="18">
                        <span>By Rachi Card</span>
                    </div>
                    <h6>The Benefits of Vitamin D & How to Get It</h6>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    <x-button color="tertiary" arrow="true" text="Read More" />
                </div>
            </div>
            <div class="news_content_card">
                <div class="news_content_card_date">
                    <span>25<br>Nov</span>
                </div>
                <div class="news_content_card_infos">
                    <div class="news_content_card_infos_author">
                        <img src="{{asset('assets/icons/profil.svg')}}" alt="" loading="lazy" width="18">
                        <span>By Rachi Card</span>
                    </div>
                    <h6>Our Favourite Summertime Tommeto</h6>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    <x-button color="tertiary" arrow="true" text="Read More" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="newsletter_wrapper">
        <div class="newsletter_background">
            <h2 class="newsletter_title">Subscribe to our Newsletter</h2>
            <div class="newsletter_input">
                <input type="text" placeholder="Your Email Address" autocomplete="new-email">
                <x-button color="primary" arrow="false" text="Subscribe" />
            </div>
        </div>
    </div>
</section>
@endsection