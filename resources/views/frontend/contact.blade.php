@extends('app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="contact-infos col-lg-5">
                    <h4 data-aos="fade-up">Contact Info</h4>
                    <ul class="contact-details p-0">
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
                    <ul class="social-links d-flex align-center pt-3 list-unstyled" data-aos="zoom-in">
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
                            <form id="contactForm" method="post" action="{{ route('contact.store') }}">
                                <div class="form-floating mb-3 input-group">
                                    <input type="text" name="name" id="name" class="form-control" id="floatingInput" placeholder="name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3 input-group">
                                    <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3 input-group">
                                    <input type="text" name="subject" id="subject" class="form-control" id="floatingInput" placeholder="Subject">
                                    <label for="floatingInput">Your Subject</label>
                                </div>
                                <div class="form-floating mb-3 input-group">
                                    <textarea class="form-control" name="comments" id="comments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
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

    <script>
        function validateForm() {
            // Flag to track whether validation passes
            var isValid = true;

            // Validate common fields
            var name = $('#name').val().trim();
            var email = $('#email').val().trim();
            var subject = $('#subject').val();
            var comments = $('#comments').val();

            // Reset any previous validation error styles
            $('#name, #email, #subject, #comments').css('border', '');

            if (name === '') {
                $('#name').css('border', '1px solid #dc3545');
                isValid = false;
            }

            if (email === '') {
                $('#email').css('border', '1px solid #dc3545');
                isValid = false;
            }

            if (subject === '') {
                $('#subject').css('border', '1px solid #dc3545');
                isValid = false;
            }
            if (comments === '') {
                $('#comments').css('border', '1px solid #dc3545');
                isValid = false;
            }
            return isValid;
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const preloaderContainer = document.getElementById("md-preloader");
            const preloader = document.getElementById("preloader");

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                if (validateForm()) {
                    // Serialize form data
                    const formData = new FormData(contactForm);
                    preloader.style.display = "flex";
                    preloaderContainer.style.height = '100%';

                    // Perform AJAX form submission
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('contact.store') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response);
               
                            setTimeout(function() {
                                preloader.style.display = "none";
                                preloaderContainer.style.height = 0;
                            }, 1000);

                            setTimeout(function() {
                                if (response.success && response.success.trim() !== "") {
                                    console.log("Success message:", response.success);
                                    showAlert('success', response.success);
                                } else if (response.error) {
                                    console.log("Error message:", response.error);
                                    showAlert('error', response.error);
                                } else {
                                    console.log("Unexpected response:", response);
                                }
                            }, 2500);
                        },
                        error: function(error) {

                            // Parse the JSON error response
                            let errorResponse = JSON.parse(error.responseText);
                            console.error("Error:", errorResponse);

                            setTimeout(function() {
                                preloader.style.display = "none";
                                preloaderContainer.style.height = 0;
                            }, 1000);

                            setTimeout(function() {
                                if (errorResponse && errorResponse.errors) {
                                    const validationErrors = errorResponse.errors;
                                    const errorFields = Object.keys(validationErrors);
                                    let index = 0;

                                    function displayNextError() {
                                        if (index < errorFields.length) {
                                            const field = errorFields[index];
                                            const errorMessage = validationErrors[field][0];
                                            showAlert('error', errorMessage);
                                            index++;
                                            // Delay before displaying the next error (e.g., 1000 milliseconds)
                                            setTimeout(displayNextError, 1000);
                                        }
                                    }
                                    // Start displaying errors one by one
                                    displayNextError();

                                } else {
                                    showAlert('error', 'An unexpected error occurred.');
                                }
                            }, 2500);


                        }
                    });
                } else {
                    // Show a SweetAlert error for validation errors
                    showAlert('error', 'Please check the form for validation errors.');
                }
            });

            function showAlert(type, message) {
                Swal.fire({
                    toast: true,
                    customClass: {
                        popup: 'colored-toast'
                    },
                    iconColor: 'white',
                    icon: type,
                    title: message,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            }
        });
    </script>
@endsection
