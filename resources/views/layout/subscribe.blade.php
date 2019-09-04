<!-- Subscribe section -->
<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h3>Subscribe our newsletter</h3>
                    <form action="subscribe" class="aa-subscribe-form">
                        {{csrf_field()}}
                        <input type="email" name="emailSubscribe" id="emailSubscribe" placeholder="Enter your Email">
                        <input id="subscribe" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->