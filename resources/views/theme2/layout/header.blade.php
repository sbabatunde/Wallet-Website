@php
    $contact = content('contact.content');
    $footersociallink = element('footer.element');
@endphp

<!-- header-section start  -->
<header class="header">
  <div class="header-top">
    <div class="container">
      <div class="row align-items-center gy-2">
        <div class="col-lg-8 col-md-7">
          <ul class="header-top-info-list">
            <li>
              <a href="tel:{{@$contact->data->phone}}"><i class="fas fa-phone"></i> {{@$contact->data->phone}}</a>
            </li>
            <li>
              <a href="mailto:{{@$contact->data->email}}"><i class="fas fa-envelope"></i> {{@$contact->data->email}}</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
             
                         
{{--<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
--}}



          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="header-bottom"> 
    <div class="container">
      <nav class="navbar navbar-expand-xl p-0 align-items-center">
        <a class="site-logo site-title" href="{{ route('home') }}">
            <img class="img-fluid rounded sm-device-img text-align" src="{{ getFile('logo', @$general->logo) }}" width="100%" alt="pp">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
        </button>
        <div class="collapse navbar-collapse mt-lg-0 mt-3" id="mainNavbar">
          <ul class="nav navbar-nav main-menu ms-auto">
            <li class="nav-item"><a href="#banner" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#why-choose" class="nav-link">Why Choose Us</a></li>
            <li class="nav-item"><a href="#investment" class="nav-link">Plan</a></li>
            <li class="nav-item"><a href="#how-start" class="nav-link">How It Works</a></li>
            <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
           
            {{--<li class="nav-item"><a href="https://www.safeassetsunion.com/privacy/policy" target="_blank" class="nav-link">Terms and Conditions</a></li>--}}
           
            <li class="account-btn">
              @if (Auth::user())
                  <a href="{{ route('user.dashboard') }}" class="nav-link">{{ __('Dashboard') }}</a>
              @else
                  <a href="{{ route('user.login') }}" class="nav-link">{{ __('Login') }}</a>
              @endif
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div><!-- header__bottom end --> 
</header>

<!-- header-section end  -->

<div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>