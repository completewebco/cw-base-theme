<div class="search-box absolute z-40 w-full bottom-0 left-0 bg-color1 text-white p-2">    
    <form id="otw-fullscreen-search-form" class="Form SearchScreen-form w-full big-container" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <div class="Field-group Field-row relative w-full flex">
            <legend class="ux-srOnly Field-legend hidden">Search this website:</legend>
            <span class="u-inlineIcon"><i class="icon ion-ios-search-strong"></i></span>
            <input type="search" name="s" id="otw-search-form" class="Field-input w-full mr-4 p-2 h-12 bg-transparent border-b-2 border-white font-heading" autocomplete="off" placeholder="Search Products..." value="<?php echo get_search_query(); ?>" />
            <button class="Form-submit font-heading Button border-2 border-white px-8 flex items-center pt-2 h-12 ml-3" type="submit" title="Search Plush Events Atlanta">Enter</button>
        </div>
    </form>
</div>    