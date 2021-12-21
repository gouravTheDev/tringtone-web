<?php
include 'header.php';
?>

<div id="banner-area" class="banner-area" style="background-image: url(images/banner/contact.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Customer Support </h1>
                    </div>
                </div>
                <!-- Col end -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </div>
    <!-- Banner text end -->
</div>

<section>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="text-center">Customer Support</h2>
                <p class="text-center mb-0">Need Support? Headset Problem? Look no further. </p>
                <p class="text-center mb-1">Tell us about your problem by just giving us a few details about the issue you are facing.  </p>
                <hr>

                <div class="row">
                    <div class="col-md-8 col-sm-12 mx-auto">
                        <form>
                            <div class="form-group">
                                <label class="font-weight-bold">Full Name</label>
                                <input type="text" class="form-control" required placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control" required placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Your Problem</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Write about the problem you are facing"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>