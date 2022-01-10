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
        <h1 class="text-white-2 text-white-2-hover flex-text">TringTone Products</h1>
    </div>
</div>
<div class="container py-4 my-4">
    <h5 class="text-center mb-3">HAPPY CUSTOMERS START WITH SUPER SERVICE SOLUTIONS</h5>
    <p class="text-center text-large mb-4">We provide quality products so our customers can be happy. Our after sales service and warranty period make sure that custommer complaints and demands are getting fulfilled.</p>
    <div class="row pt-4">
        <div class="col-md-4 col-sm-12 mx-auto">
            <div class="card shadow rounded-corner mb-3">
                <div class="card-body pb-4">
                    <img src="/images/headset.jpg" alt="" class="img-responsive product-type-image">
                    <div class="text-center">
                        <h5 class="mb-1">Headsets</h5>
                        <p class="text-large">Tringtone provides best headsets for office usages</p>
                        <a href="products?type=headset" class="btn btn-black">Product List</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mx-auto">
            <div class="card shadow rounded-corner mb-3">
                <div class="card-body pb-4">
                    <img src="/images/poe.jpg" alt="" class="img-responsive product-type-image">
                    <div class="text-center">
                        <h5 class="mb-1">P.O.E Phones</h5>
                        <p class="text-large">Tringtone provides best POE for office usages</p>
                        <a href="products?type=poe" class="btn btn-black">Product List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.footer')