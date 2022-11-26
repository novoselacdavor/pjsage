<header class="banner">
    <div class="container">
        <div class="banner__inner">
            <div class="banner__col">
                <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
            </div>
            <div class="banner__col">
                <div class="banner__search-wrapper">
                    <div class="search">
                        <div class="search__circle"></div>
                        <div class="search__rectangle"></div>
                    </div>
                </div>
                <div class="banner__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="nav-primary">
                    <div class="container">
                        @if (has_nav_menu('primary_navigation'))
                            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
