<!DOCTYPE html>
<html lang="en">

<head>
    <title>Job Finder &mdash; Moshiur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.head')

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body "></div>
        </div> <!-- .site-mobile-menu -->


        @include('partials.nav')

        @include('partials.hero')


        @include('partials.category')


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="mb-5 h3">Recent Jobs</h2>
                        <div class="rounded border jobs-wrap">
                            @foreach ($jobs as $job)
                                <a href="{{ route('jobs.show', [$job->id, $job->slug]) }}"
                                    class="job-item d-block d-md-flex align-items-center
                        border-bottom
                        @if ($job->type == 'parttime') partime @elseif($job->type == 'fulltime')fulltime @else freelance @endif;">
                                    <div class="company-logo blank-logo text-center text-md-left pl-3">

                                        @if (empty($job->company->cover_photo))
                                            <img src="{{ asset('uploads/logo/serwman1.jpg') }}" alt="banner"
                                                class="card-img-top" style="width: 100%;">
                                        @else
                                            <img src="{{ asset('uploads/logo') }}/{{ $job->company->logo }}"
                                                alt="Image" class="img-fluid mx-auto">
                                        @endif
                                    </div>
                                    <div class="job-details h-100">
                                        <div class="p-3 align-self-center">
                                            <h3>{{ $job->position }}</h3>
                                            <div class="d-block d-lg-flex">
                                                <div class="mr-3"><span class="icon-suitcase mr-1"></span>
                                                    {{ str_limit($job->company->cname, 20) }}
                                                </div>
                                                <div class="mr-3"><span class="icon-room mr-1"></span>
                                                    {{ str_limit($job->address, 20) }}</div>
                                                <div><span class="icon-money mr-1"></span> {{ $job->salary }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-category align-self-center">
                                        @if ($job->type === 'fulltime')
                                            <div class="p-3">
                                                <span
                                                    class="text-info p-2 rounded border border-info">{{ $job->type }}</span>
                                            </div>
                                        @elseif ($job->type === 'parttime')
                                            <div class="p-3">
                                                <span
                                                    class="text-danger p-2 rounded border border-danger">{{ $job->type }}</span>
                                            </div>
                                        @else
                                            <div class="p-3">
                                                <span
                                                    class="text-warning p-2 rounded border border-warning">{{ $job->type }}</span>
                                            </div>
                                        @endif


                                    </div>
                                </a>
                            @endforeach


                        </div>

                        <div class="col-md-12 text-center mt-5">
                            <a href="{{ route('alljobs') }}" class="btn btn-primary rounded py-3 px-5"><span
                                    class="icon-plus-circle"></span> Show More Jobs</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('partials.testimonial')


        <div class="site-blocks-cover overlay inner-page" style="background-image: url('external/images/hero_1.jpg');"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 text-center" data-aos="fade">
                        <h1 class="h3 mb-0">Your Dream Job</h1>
                        <p class="h3 text-white mb-5">Is Waiting For You</p>
                        <p><a href="/register" class="btn btn-outline-success py-3 px-4">Job Seeker</a> <a
                                href="{{ route('employer.register') }}"
                                class="btn btn-outline-warning py-3 px-4">Employer</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section site-block-feature bg-light">
            <div class="container">

                <div class="text-center mb-5 section-heading">
                    <h2>Why Choose Us</h2>
                </div>

                <div class="d-block d-md-flex border-bottom">
                    <div class="text-center p-4 item border-right" data-aos="fade">
                        <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h4">More Jobs Every Day</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo
                            quos
                            fugit vitae dolorum.</p>
                        <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                    </div>
                    <div class="text-center p-4 item" data-aos="fade">
                        <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h4">Creative Jobs</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo
                            quos
                            fugit vitae dolorum.</p>
                        <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                    </div>
                </div>
                <div class="d-block d-md-flex">
                    <div class="text-center p-4 item border-right" data-aos="fade">
                        <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h4">Healthcare</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo
                            quos
                            fugit vitae dolorum.</p>
                        <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                    </div>
                    <div class="text-center p-4 item" data-aos="fade">
                        <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h4">Finance &amp; Accounting</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo
                            quos
                            fugit vitae dolorum.</p>
                        <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                    </div>
                </div>
            </div>
        </div>


        @include('partials.blog')




        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script>
            window.replainSettings = {
                id: 'a62778c5-1215-4b24-aa49-35207b26953b'
            };
            (function(u) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = u;
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })('https://widget.replain.cc/dist/client.js');
        </script>
</body>

</html>
