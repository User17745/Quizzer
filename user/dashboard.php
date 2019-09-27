<div class="columns is-gapless" style="margin: 0;">
    <div class="column is-2" id="sidebar" onclick="closeSidebar()" style="z-index: 2;">
        <?php include './user/partials/sidebar.php'; ?>
    </div>
    <div class="column" style="height: 38.2em; overflow-y: auto; z-index: 1;">
        <?php
            include './user/partials/exams.php';
        ?>
    </div>
</div>

<script>
function closeSidebar(event) {
    document.getElementById("sidebar").style.display = "none";
}
</script>