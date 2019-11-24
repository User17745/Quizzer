<div class="review-card student-review card">
    <header class="card-header">
        <p class="card-header-title">
            <?php echo $review->getTitle(); ?>
        </p>
    </header>
    <div class="card-content">
        <p><?php echo $review->getReview(); ?></p>
        <span>
            <?php 
                for($j = 0; $j < $review->getRating(); $j++)
                    echo '<span class="fas fa-star"></span>';
                for($j = 0; $j < (5-$review->getRating()); $j++)
                    echo '<span class="far fa-star"></span>';
            ?>
        </span> 
    </div>
</div>