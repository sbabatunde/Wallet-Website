@php
$content = content('contact.content');
$contentlink = content('footer.content');
$footersociallink = element('footer.element');
$serviceElements = element('service.element');

@endphp

<footer class="footer-section cover-image">
    <div class="footer-logo-portion">
        <div class="container">
            <div class="row gy-3 align-items-center">
             

                <div class="col-lg-12 text-center">
                    <a href="{{ route('home') }}" class="footer-logo">
                        @if (@$general->logo)
                           <center> <img class="img-fluid rounded sm-device-img text-align"
                                src="{{ getFile('logo', @$general->logo) }}" width="100%" alt="pp"></center>
                        @else
                            {{ __('No Logo Found') }}
                        @endif
                    </a>
                </div>

              
            </div>
        </div>
    </div>

    <div class="footer-menu-portion">
        <div class="container">
            <div class="row gy-2">
               
                <div class="col-lg-12 text-center">
                    <p class="mb-0">
                       Copyright 2024. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
