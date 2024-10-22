@extends(template().'layout.master')

@section('content')
    <section class="breadcrumbs" style="background-image: url({{ getFile('breadcrumbs', @$general->breadcrumbs) }});">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-capitalize">
                <h2>Terms and Conditions</h2>
                <ol>
                    <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li>Terms and Conditions</li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section>
        <div class="container" data-aos="fade-up">
            @php
                $policy = content('privacy policy.content');
            @endphp
            <div class="col-md-12">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="bg-dark card">
                            <div class="invest-top"><br>
                                <h2 class="text-center"><b>Terms and Conditions of Safe Assets Union</b></h2>
                            </div>

                            <div class="p-3 text-justifys">
                                <p> <?= clean(@$policy->data->Privacy_Policy); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
