<header class="{{ backpack_theme_config('classes.menuHorizontalContainer') ?? 'navbar-expand-lg top' }}">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-print-none {{ backpack_theme_config('classes.menuHorizontalContent') ?? 'navbar navbar-expand-lg navbar-light' }}">
            <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container-fluid' : 'container-xl' }}">
                <ul class="navbar-nav">
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </div>
</header>

{{-- we use this here to display the mobile menu --}}
<aside class="navbar navbar-vertical navbar-expand-lg navbar-light d-block d-lg-none">
    <div class="container-fluid">
        <ul class="nav navbar-nav d-flex flex-row align-items-center justify-content-between w-100">
            @include(backpack_view('layouts.partials.mobile_toggle_btn'), ['forceWhiteLabelText' => true])
            <div class="d-flex flex-row align-items-center">
                @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
                @include(backpack_view('inc.menu_user_dropdown'))
            </div>
        </ul>
        <div class="collapse navbar-collapse" id="mobile-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="px-3 fw-bold">{{ ucfirst(strtolower(trans('backpack::base.administration'))) }}</li>
                @include(backpack_view('inc.sidebar_content'))
            </ul>
        </div>
    </div>
</aside>