@extends('app')
@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="contact-infos col-lg-5">
                    <h4 data-aos="fade-up">Contact Info</h4>
                    <ul class="contact-details">
                        @foreach ($contacts as $contact)
                            <li class="d-flex align-items-center py-3" data-aos="zoom-in" style="{{ $loop->last ? '' : 'border-bottom: 1px solid #212529;' }}">
                                <div class="icon-box shadow-box">
                                    <i class="{{ $contact['icon'] }}"></i>
                                </div>
                                <div class="right">
                                    <span>{{ $contact['name'] }}</span>
                                    @foreach ($contact['infos'] as $info)
                                        <h5>{{ $info }}</h5>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <h4 data-aos="fade-up" class="pt-3">Social Info</h4>
                    <ul class="social-links d-flex align-center pt-3" data-aos="zoom-in">
                        @foreach ($socials as $social)
                            <li>
                                <a href="{{ $social['link'] }}" target="_blank" class="shadow-box">
                                    <i class="{{ $social['icon'] }}"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div data-aos="zoom-in" class="contact-form col-lg-7">
                    <div class="shadow-box py-5 px-4">
                        <img decoding="async" src="{{ asset('img/icon2.png') }}" alt="Star" class="star-icon">
                        <h4 class="mb-3">GET IN <span>TOUCH !</h4>
                        <div>
                            <form action="" method="post" class="">
                                <div class="form-floating mb-3 input-group">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3 input-group">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3 input-group">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Subject">
                                    <label for="floatingInput">Your Subject</label>
                                </div>
                                <div class="form-floating mb-3 input-group">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                                    <label for="floatingTextarea2">Comments</label>
                                </div>

                                <div class="input-group">
                                    <button class="theme-btn submit-btn" type="submit" name="submit" id="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
