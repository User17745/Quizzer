<?php 
    require_once(dirname(__FILE__, 3) . '/classes/ExamPack.php');
    //For test sake...
    $id = 1;
    $exam_pack = new ExamPack($id);
?>
<section id="exam-pack-hero" class="hero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        <?php echo $exam_pack->getName(); ?> 
      </h1>
      <h2 class="subtitle">
        <span id="exam-pack-rating">
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star-half-alt"></span>
            <span class="far fa-star"></span>
        </span>
      </h2>
    </div>
  </div>
</section>

<section class="exam-pack-meta">
    <div class="columns">
        <div id="exam-pack-provider" class="column is-4">
            <div class="columns">
                <div id="exam-provider-box" class="column">
                    <img src="././assets/img/person-male-small.png" id="exam-pack-provider-image" class="is-rounded" alt="exam-pack-provider-image">

                    <div id="exam-pack-provider-info">
                        <div id="exam-pack-provider-name">
                            <h2>TexMux Technologies</h2>
                        </div>
                        <div id="exam-pack-tags">
                            <span class="tag">Technical</span>
                            <span class="tag">Coding</span>
                            <span class="tag">Difficult</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="exam-pack-conversion" class="column">
            <div id="exam-pack-meta">
                <span id="exam-date-time"><span class="icon is-large"><i class="far fa-calendar-alt fa-2x"></i></span><?php echo date("d F, y", strtotime($exam_pack->getDate())); ?></span>  <span id="exam-type"><span class="icon is-large"><i class="fas fa-certificate fa-2x"></i></span><?php echo $exam_pack->getType(); ?></span>  <span id="exam-seats"><span class="icon is-large"><i class="fas fa-user-tie fa-2x"></i></span><?php echo $exam_pack->getNumSeats(); ?></span>  <span id="exam-qualification-req"><span class="icon is-large"><i class="far fa-id-badge fa-2x"></i></span><?php echo $exam_pack->getRequiredQualifications(); ?></span>
            </div>
            <div id="exam-pack-sale">
                <a id="exam-pack-buy-button" class="button">
                    <span class="icon is-small">
                        <i class="fas fa-shopping-basket"></i>
                    </span>
                    <span>₹<?php echo $exam_pack->getPrice(); ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="columns">
        <div id="exam-pack-listing" style="column is-9">
            
            <div id="exam-pack-details">
                <h1 class="title">Details</h1>
                <p class="subtitle" style="width: 350px;">Details about this exam package.</p>
                <div id="exam-pack-details-text">
                    <?php echo $exam_pack->getDetails() ?>
                </div>
                <a id="expand">more</a>
            </div>

            <div id="exam-pack-info">
                <h1 class="title">Information</h1>
                <p class="subtitle" style="width: 350px;">A quick overview of the exam package.</p>
                <table class="table" style="margin: 0 0 1rem 0;">
                    <tbody>
                        <tr><th>Exam</th><td><?php echo $exam_pack->getName(); ?></td></tr>
                        <tr><th>Exam type</th><td><?php echo $exam_pack->getType(); ?></td></tr>
                        <tr><th>Organization</th><td><?php echo $exam_pack->getOrganization(); ?></td></tr>
                        <tr><th>Number of available position</th><td><?php echo $exam_pack->getNumSeats(); ?></td></tr>
                        <tr><th>Required qualifications</th><td><?php echo $exam_pack->getRequiredQualifications(); ?></td></tr>
                        <tr><th>Number of included tests</th><td><?php echo $exam_pack->getNumTestsIncluded(); ?></td></tr>
                        <tr><th>Number of included resources</th><td><?php echo $exam_pack->getNumResourcesIncluded(); ?></td></tr>
                        <tr><th>Study material (hours)</th><td><?php echo $exam_pack->getStudyMaterialAmountHrs(); ?></td></tr>
                    </tbody>
                </table>
                <a id="exam-apply" class="button">
                    <span>Apply</span>
                    <span class="icon is-small">
                        <i class="fas fa-external-link-alt"></i>
                    </span>
                </a>
            </div>

        </div>

        <div id="exam-pack-right-side-bar" class="column">
            
            <div id="exam-pack-reviews-stats" class="review-card card">
                <div id="exam-pack-reviews-stats-stars" class="card-content">
                    <span id="exam-pack-reviews-stats-average">
                        <span id="exam-pack-reviews-stats-average-number">4.5</span><span id="exam-pack-reviews-stats-average-total">out of 5.</span>
                    </span>
                    <div id="stars-5" class="stars">
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>

                        <progress class="progress is-small" value="60" max="100">60%</progress>
                    </div>
                    <div id="stars-4" class="stars">
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>

                        <progress class="progress is-small" value="25" max="100">25%</progress>
                    </div>
                    <div id="stars-3" class="stars">
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>

                        <progress class="progress is-small" value="10" max="100">10%</progress>
                    </div>
                    <div id="stars-2" class="stars">
                        <span class="icon is-small"><i class="fas fa-star"></i></span>
                        <span class="icon is-small"><i class="fas fa-star"></i></span>

                        <progress class="progress is-small" value="4" max="100">4%</progress>
                    </div>
                    <div id="stars-1" class="stars">
                        <span class="icon is-small"><i class="fas fa-star"></i></span>

                        <progress class="progress is-small" value="1" max="100">1%</progress>
                    </div>    
                    <a id="show-reviews" class="button transparent-card-button" href="#exam-pack-review-list">See Reviews</a>
                </div>
            </div>

            <div id="review-card" class="review-card card">
                <header class="card-header">
                    <p class="card-header-title">
                        Submit Review
                    </p>
                </header>
                <div class="card-content">
                    <p id="review-body">Help out others by letting them know what you think of this pack.</p>
                    <form method="post">
                        <div class="field">
                            <div class="control" style="margin-bottom: -.9rem; margin-top: .5rem;">
                                <span id="rating-stars">
                                    <input type="radio" name="rating" value="1">
                                    <input type="radio" name="rating" value="2">
                                    <input type="radio" name="rating" value="3">
                                    <input type="radio" name="rating" value="4">
                                    <input type="radio" name="rating" value="5">
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input" type="text" placeholder="What do you think of the pack?">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="button is-link" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div id="exam-pack-review-list">
        
        <h1 class="title">Ratings & Reviews</h1>
        <p class="subtitle" style="width: 350px;">See what others have to say about this exam pack.</p>

        <div class="review-card student-review card">
            <header class="card-header">
                <p class="card-header-title">
                    Student Review
                </p>
            </header>
            <div class="card-content">
                <p>The study material is to the point and I really like the consise nature of notes.</p>
                <span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star-half-alt"></span>
                    <span class="far fa-star"></span>
                </span> 
            </div>
        </div>

        <div class="review-card student-review card">
            <header class="card-header">
                <p class="card-header-title">
                    Student Review
                </p>
            </header>
            <div class="card-content">
                <p>The study material is to the point and I really like the consise nature of notes.</p>
                <span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star-half-alt"></span>
                    <span class="far fa-star"></span>
                </span> 
            </div>
        </div>

        <div class="review-card student-review card">
            <header class="card-header">
                <p class="card-header-title">
                    Student Review
                </p>
            </header>
            <div class="card-content">
                <p>The study material is to the point and I really like the consise nature of notes.</p>
                <span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star"></span>
                    <span class="fas fa-star-half-alt"></span>
                    <span class="far fa-star"></span>
                </span> 
            </div>
        </div>

    </div>
</section>

<script>
    document.getElementById("expand").addEventListener('click', expandDetails);

    function expandDetails(e) {
        const text = document.getElementById('exam-pack-details-text');
        text.style.height = 'fit-content';
        text.style.webkitMask = 'none';
        document.getElementById("expand").style.display = 'none';
    }

    // $("#show-reviews").click(function() {
    //     $('html, #user-dashboard-partial').animate({
    //         scrollTop: $("#exam-pack-review-list").offset().top
    //     }, 500);
    // });
</script>