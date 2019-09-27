<div class="exams">
    <div class="owl-carousel">
        <div class="card card-owl"> 1 </div>
        <div class="card card-owl"> 2 </div>
        <div class="card card-owl"> 3 </div>
        <div class="card card-owl"> 4 </div>
        <div class="card card-owl"> 5 </div>
        <div class="card card-owl"> 6 </div>
    </div>

    <div class="exams-grid">
        <div class="columns" style="margin: .5rem;">
            <div class="column is-4 exam-box">A</div>
            <div class="column is-4 exam-box">B</div>
            <div class="column is-4 exam-box">C</div>
        </div>
        <div class="columns" style="margin: 0.5rem;">
            <div class="column is-4 exam-box">D</div>
            <div class="column is-4 exam-box">E</div>
            <div class="column is-4 exam-box">F</div>
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