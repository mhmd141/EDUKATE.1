@props(['testimonial','comments'])
<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                    <h1 class="display-4">What Say Our Students</h1>
                </div>
                <p class="m-0">{{$testimonial->description}}</p>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($comments as $comment)
                    <div class="bg-light p-5">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <p>{{$comment->content}}</p>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                            <div>
                                <h5>Student Name</h5>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Start -->
