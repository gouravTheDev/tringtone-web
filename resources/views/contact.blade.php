@include('include.header')
<style>
    .background-image hr {
        width: 100%;
    }

    h6 {
        font-weight: bold;
    }
</style>
<div class="header-section">
    <div class="background-image">
        <h1 class="text-white-2 text-white-2-hover flex-text">Contact Us</h1>
    </div>
</div>
<div class="container my-4">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-1 justify-content-center">
        <div class="col padding-ten-right lg-padding-five-right md-padding-15px-right md-margin-five-bottom wow animate__fadeIn">
            <p class="alt-font text-medium margin-15px-bottom">Queries & Customer Support</p>
            <h5 class="alt-font margin-20px-bottom">Feel free to get in touch with us any convenient way</h5>
            <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                <div class="icon-box-holder align-middle d-table-cell position-relative">
                    <i class="icon-envelope icon-medium text-deep-pink padding-5px-top"></i>
                    <div class="alt-font">Sales Enquiries</div>
                    <p><a href="mailto:sales@tringtone.com"> sales@tringtone.com</a></p>
                </div>
            </div>
            <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                <div class="icon-box-holder align-middle d-table-cell position-relative">
                    <i class="icon-envelope icon-medium text-deep-pink padding-5px-top"></i>
                    <div class="alt-font">Support Enquiries</div>
                    <p><a href="mailto:support@tringtone.com"> support@tringtone.com</a></p>
                </div>
            </div>
            <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                <div class="icon-box-holder align-middle d-table-cell position-relative">
                    <i class="icon-chat icon-medium text-deep-pink padding-5px-top"></i>
                    <div class="alt-font">Business Phone</div>
                    <p>+91 123 456 7890</p>
                </div>
            </div>
        </div>
        <div class="col wow animate__fadeIn">
            <form id="contact-form-3" action="email-templates/contact-form.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                            <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Want to send us a message?</div>
                            <div>
                                <div class="form-results d-none"></div>
                                <input type="text" name="name" id="name" placeholder="Name*" class="input-bg required">
                                <input type="email" name="email" id="email" placeholder="E-mail*" class="input-bg required">
                                <input type="tel" name="subject" id="subject" placeholder="Subject" class="input-bg">
                                <textarea name="comment" id="comment" placeholder="Your Message" class="input-bg"></textarea>
                                <button id="contact-us-button-3" type="submit" class="btn btn-small border-radius-4 btn-black submit">send message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


@include('include.footer')