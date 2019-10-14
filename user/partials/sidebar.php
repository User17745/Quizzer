<div class="sidebar" id="user-sidebar">
    <div class="sidebar-header">
        <div id="sidebar-close"><span class="icon"><i class="fas fa-chevron-circle-left"></i></span></div>
        <div class="is-clearfix"></div>
        <div class="sidebar-header-img">
            <img src="./assets/img/user_img.jpg" alt="user-img">
        </div>
        <div class="sidebar-header-info">
            <div class="sidebar-header-info-name is-capitalized">
                <h3><?php echo $_SESSION["user"];?></h3>
            </div>
            <div class="sidebar-header-info-status">
                <span class="tag"><i class="fas fa-circle" style="color: #008a6e; margin-right: .3rem;"></i>Online</span>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <div class="sidebar-menu-item active">
            <span class="sidebar-menu-item-icon">
                <i class="fas fa-book-open"></i>
            </span>
            <span class="sidebar-menu-item-text">
                Exams
            </span>
        </div>
        <div class="sidebar-menu-item">
            <span class="sidebar-menu-item-icon">
                <i class="fab fa-pied-piper"></i>
            </span>
            <span class="sidebar-menu-item-text">
                My Tests
            </span>
        </div>
        <div class="sidebar-menu-item">
            <span class="sidebar-menu-item-icon">
                <i class="fas fa-chart-area"></i>
            </span>
            <span class="sidebar-menu-item-text">
                Stats
            </span>
        </div>
        <div class="sidebar-menu-item">
            <span class="sidebar-menu-item-icon">
                <i class="fas fa-newspaper"></i>
            </span>
            <span class="sidebar-menu-item-text">
                News
            </span>
        </div>
    </div>
</div>

<script>
    // Assigns onclick event listener to all the menu items.
    const menuItems = document.getElementsByClassName("sidebar-menu-item");
    for(let menuItem of menuItems)
        menuItem.addEventListener("click", getNewTabName);

    // Finds the nearest parent node with a specific class for a child.
    function getParentNodeWithClass(node, cls){
        while ((node = node.parentNode) && !node.classList.contains(cls));
        return node;
    }

    // Finds out on which tab has the user clicked on.
    function getNewTabName(e){
        //Note: The terms "node" and "element" have been used interchangeably in this section of comment eventhough both terms have slight differences.
        // This "node" variable is the exact element which is clicked upon by the user.
        let node = e.target;

        /** 
         * If the "node" is the element which contains the text that we need(Name of the tab), 
         * we simply parse the text, trim it and call changeTab() in order for it to do it's thing. 
        */
        if(node.classList.contains("sidebar-menu-item-text"))
            changeTab(node.innerHTML.trim());

        /** 
         * Else, if "node" is the immediate parent element that contains the text and the icon element, 
         * we parse through all of the child nodes, find the node that contains our text, trim it and call changeTab(). 
        */
        else if(node.classList.contains("sidebar-menu-item")){
            for(let i = 0; i < node.childNodes.length; i++)
                if(node.childNodes[i].nodeName != "#text")
                    if(node.childNodes[i].classList.contains("sidebar-menu-item-text"))
                        changeTab(node.childNodes[i].innerHTML.trim());
        }
        /** 
         * Otherwise, if "node" contains any other element beside the above two, 
         * we parse through all of the parent nodes, find the immediate node that contains the text and the icon element
         * and follow the same remaining procedure as the last case.
        */
        else {
            node = getParentNodeWithClass(node, "sidebar-menu-item");
            for(let i = 0; i < node.childNodes.length; i++)
                if(node.childNodes[i].nodeName != "#text")
                    if(node.childNodes[i].classList.contains("sidebar-menu-item-text"))
                        changeTab(node.childNodes[i].innerHTML.trim());
        }
        
        
        // Highlighting the new tab with "active" class.
        for(menuItem of menuItems)
            menuItem.classList.remove('active');
        if(node.classList.contains('sidebar-menu-item'))
            node.classList.add('active');
        else
            node = getParentNodeWithClass(node, 'sidebar-menu-item')
            node.classList.add('active');
    }

    // Finds out the actual PHP file name for the requested tab and loads it using AJAX and jQuery 
    function changeTab(newTabName) {
        let fileName;
        
        switch(newTabName) {
            case 'Exams': fileName = 'exams.php';
            break;
            case 'My Tests': fileName = 'tests.php';
            break;
            //case 'Stats': fileName = 'stats.php';
            case 'Stats': fileName = 'examPack.php';
            break;
            case 'News': fileName = 'news.php';
            break;
            default: fileName = 'exams.php';
        }

        // Sending fileName to dashboard to update in session.
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: './user/dashboard.php',
                data: {dash_page: fileName},
                success: function(data) {
                        
                    }
                });
        });

        //jQuery for AJAX to load the required PHP file
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: './user/partials/' + fileName,
                data: {session: '<?php echo session_id(); ?>'},
                success: function(data) {
                        $('#user-dashboard-partial').html(data)
                    },
                dataType: 'html'
                });
        });
    }
</script>