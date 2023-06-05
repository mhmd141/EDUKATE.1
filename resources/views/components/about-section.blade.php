   @props(['page'])
   <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{@$page->image}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">{{@$page->title}}</h6>
                        <h1 class="display-4">{{@$page->sub_title}}</h1>
                    </div>
                    <p>{{@$page->des}}</p>

    @if($page->slug == 'about')
    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">{{@$page->statice1}}</h1>
                                <h6 class="text-uppercase text-white">{{@$page->statice1_title}}</h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">{{@$page->statice2}}</h1>
                            <h6 class="text-uppercase text-white">{{@$page->statice2_title}}</h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">{{@$page->statice3}}</h1>
                                <h6 class="text-uppercase text-white">{{@$page->statice3_title}}</h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-warning text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">{{@$page->statice4}}</h1>
                                <h6 class="text-uppercase text-white">{{@$page->statice4_title}}</h6>
                            </div>
                        </div>
                    </div>
@endIf

                </div>
            </div>
        </div>
    </div>
