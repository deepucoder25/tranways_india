<div class="contact-form">
    <div class="contact-form-header">
        <div class="row">
            <div class="col-12">
                <h5><small class="quote-header-subtitle">Request a Free Quote Today!</small> <a href="<?= $phonehtml ?>" class="quote-header-phone"><i class="far fa-phone-volume"></i> <?= $phone ?></a></h5>
            </div>
        </div>
    </div>
    <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="far fa-user-tie"></i>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-icon">
                    <i class="fa-solid fa-envelope"></i>
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" class="form-control" name="mfrom" placeholder="From">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-thumbtack"></i>
                        <input type="text" class="form-control" name="mto" placeholder="To">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-icon">
                <i class="far fa-comment-lines"></i>
                <textarea name="message" cols="30" rows="5" class="form-control"
                    placeholder="Write Your Message" ></textarea>
            </div>
        </div>
            <div id="quoteformresults"></div>
        <button id="submitbquoteform" type="submit" class="theme-btn btn-submit-quote">Submit <i class="far fa-paper-plane"></i></button>
        <button onclick="$('#quoteformresults').html('');"  type="reset" class="theme-btn btn-reset-quote">Clear <i class="far fa-trash-alt"></i></button>
    </form>
</div>