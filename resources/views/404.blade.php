@extends('layout.index')
@section('title', 'Not found')
@section('content')
    <!-- 404 error section -->
    <section id="aa-error">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h2>404</h2>
                        <span>Sorry! Page Not Found</span>
                        <p>Sorry this content has been moved or not found!</p>
                        <p>Please return homepage by clicking below button for next experience!</p>
                        <a href="homepage"> Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / 404 error section -->

    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->
@endsection