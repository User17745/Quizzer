<div class="exams">
    <div class="owl-carousel">
        <div class="card-owl"><img src="././assets/img/slide1" alt="slide-one"></div>
        <div class="card-owl"><img src="././assets/img/slide2" alt="slide-two"></div>
        <div class="card-owl"><img src="././assets/img/slide3" alt="slide-three"></div>
        <div class="card-owl"><img src="././assets/img/slide4" alt="slide-four"></div>
        <div class="card-owl"><img src="././assets/img/slide5" alt="slide-five"></div>
        <div class="card-owl"><img src="././assets/img/slide6" alt="slide-six"></div>
    </div>

    <div class="exams-grid">
        <h1 class="title">Top Selling Exam Packs</h1>
        <p class="subtitle" style="width: 350px;">Our most popular exam packs are here and at amazing prices!</p>
        <div class="columns">
            <div class="column exam-box"><img src="././assets/img/exam1.png" alt="exam-one"></div>
            <div class="column exam-box"><img src="././assets/img/exam2.png" alt="exam-two"></div>
            <div class="column exam-box"><img src="././assets/img/exam3.png" alt="exam-three"></div>
        </div>
        <div class="columns">
            <div class="column exam-box"><img src="././assets/img/exam4.png" alt="exam-four"></div>
            <div class="column exam-box"><img src="././assets/img/exam5.png" alt="exam-five"></div>
            <div class="column exam-box"><img src="././assets/img/exam6.png" alt="exam-six"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            center: true,
            items:2,
            loop:true,
            margin:30,
            responsive:{
                600:{
                    items:2
                }
            }
        });
    });
</script>