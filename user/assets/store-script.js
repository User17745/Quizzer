//----------------------------------------------Exam Pack Opener----------------------------------------------//
// Variables 
var examPackItemTargetClassName = 'exam-box';
var examPackIdDataAttrName = 'data-pack-id';
var examPackPhpFile = 'exam-pack.php';   


var examPackItems = document.getElementsByClassName(examPackItemTargetClassName);
    for(let examPackItem of examPackItems) {
        examPackItem.addEventListener('click', openExamPack)
        examPackItem.classList.add('show-cursor-pointer');
    }

    function openExamPack(e) {
        let packId;
        // Enabling page load animation under the navigation bar
        document.getElementById("loading-page").style.display = "block";

        packId = getPackId(e.target);

        // Sending file name & pack ID to dashboard to update in session.
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: './user/dashboard.php',
                data: {dash_page: examPackPhpFile, pack_id: packId},
                success: function(data) {
                        
                    }
                });
        });

        // jQuery for AJAX to load the required PHP file
        $(document).ready(function() {
            $.ajax({
            type: "POST",
            url: './user/partials/' + examPackPhpFile,
            data: {session: '<?php echo session_id(); ?>'},
            success: function(data) {
                    // Loading the partial into the page.
                    $('#user-dashboard-partial').html(data)
                    // Hiding the page loading animation under the navigation bar
                    $('#loading-page').hide();
                },
            dataType: 'html'
            });
        });
    }

    function getPackId(node) {
        if(node.classList.contains(examPackItemTargetClassName))
            return node.getAttribute(examPackIdDataAttrName);
        else{
            node = getParentNodeWithClass(node, examPackItemTargetClassName);
            return node.getAttribute(examPackIdDataAttrName);
        }
    }
//----------------------------------------------Exam Pack Opener----------------------------------------------//

//----------------------------------------------Owl Carousal Script----------------------------------------------//
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
//----------------------------------------------Owl Carousal Script----------------------------------------------//