<section class="breadcrumb-hero" data-animate="bottom" data-delay="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="content-area">
                    <div class="accent-line"></div>
                    <h1 class="page-title">Contact Us</h1>
                    <p class="page-description">
                        Get in touch with us today for a free quote and personalized moving solutions. Our expert team is ready to assist you with all your relocation needs across India.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="breadcrumb-nav" data-animate="left" data-delay="1">
    <div class="container">
        <ol class="breadcrumb-custom mb-0">
            <li class="breadcrumb-item">
                <a href="<?=site_url()?>">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Contact Us
            </li>
        </ol>
    </div>
</nav>
<div class="content py-3">
    <div class="container">
        <div class="row align-items-center row-gap-4">
            <div class="col-xl-7 col-lg-7">
                <div class="mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mb-3"><span class="dark-red">Reach Out</span> to Our Dedicated Support Team<span class="dark-red">.</span></h2>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="mb-2">Our team is ready to help. Your satisfaction is our priority</span>
                        <p>Let's plan your perfect move together. Contact us for a free quote and discover why thousands of customers trust us for their relocation needs.</p>
                    </div>
                    <div class="border-bottom mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar avatar-lg rounded-3 bg-danger px-3 py-2 text-black me-2"><i class="fas fa-envelope fs-24 text-white"></i></span>
                            <div>
                                <p class="fs-14 bold mb-0">Email Address</p>
                                <span class="text-black fs-16"><a class="text-decoration-none dark-red" href="<?=$mailhtml?>"><?=$mail?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar avatar-lg rounded-3 bg-danger px-3 py-2 text-black me-2"><i class="fas fa-phone fs-24 text-white"></i></span>
                            <div>
                                <p class="fs-14 bold mb-0">Phone Number</p>
                                <span class="text-black fs-16"><a class="text-decoration-none dark-red" href="<?=$phonehtml?>"><?=$phone?></a></span><br>
                                <span class="text-black fs-16"><a class="text-decoration-none dark-red" href="<?=$phonehtml1?>"><?=$phone1?></a></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-lg rounded-3 bg-danger px-3 py-2 text-black me-2"><i class="fas fa-location-dot fs-24 text-white"></i></span>
                            <div>
                                <p class="fs-14 bold mb-0">Our Address</p>
                                <span class="text-black fs-16"><address><?=$address?></address></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="card bg-gray shadow-none mb-0">
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h2 class="mb-1 fw-bold">Get in Touch</h2>
                            <p class="text-black fs-16 mb-1">How we can help you? Please write down your query</p>
                        </div>
                        <form method="post" id="getintouchform" onsubmit="return false" class="row flex-column">
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Full Name</b> <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Full Name" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Email</b> <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Phone</b> <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" placeholder="Phone Number" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Message</b> <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" placeholder="Your Message" rows="3"></textarea>
                            </div>
                            <div class="col-12 form_box">
                                <div class="d-flex my-3">
                                    <button type="button" id="submitcontactbtn" class="btn btn-danger text-white">
                                        Send Message &nbsp;<i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12" id="resulttouch"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="map-grid py-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867495.57970536!2d74.1275402681546!3d18.8047856661642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1760679431085!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#submitcontactbtn').click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/contact'); ?>", // Update with your endpoint
                data: $("#getintouchform").serialize(),
                beforeSend: function () {
                    $('#resulttouch').html('<p style="color:red">Please wait...</p>');
                },
                success: function (data) {
                    $('#resulttouch').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><h4>Success! Your message has been submitted successfully. We will contact you soon.</h4></div>";
                        $("#getintouchform").trigger('reset');
                    }
                    $('#resulttouch').html(data);
                    setTimeout(function () {
                        $('#resulttouch').fadeOut('slow', function () {
                            $(this).empty().show();
                        });
                    }, 2000);
                }
            });
        });
    });
</script>