<div class="column exam-box" data-pack-id="<?php echo $pack_id; ?>"><img class="exam-pack" src="<?php echo ($store->getPack($pack_id))->getThumbImg(); ?>" alt="exam-<?php echo $pack_id; ?>"></div>

<script>
    console.log(document.getElementsByClassName('exam-box')[0].getAttribute('data-pack-id'));
</script>