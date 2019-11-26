// Form Loading
function startLoading(id=""){
    let enableCssClass = "loading";
    let loadingBar;

    if(id == "")
        loadingBar = document.getElementsByTagName("progress")[0];
    else
        loadingBar = document.getElementById(id);

    loadingBar.classList.add(enableCssClass);
}

// Notification Dismiss JS
document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      $notification = $delete.parentNode;
      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });
  
  // User Dashboard Sidebar Hide
  document.getElementById("sidebar-close").addEventListener('click', toggleSidebar);
  document.getElementById("nav-user-icon").addEventListener('click', toggleSidebar);
  function toggleSidebar(e) {
    const iconSpan = document.getElementById("nav-user-icon");
    const userIcon = '<img src="./assets/img/user_img.jpg" alt="user-img"></span>';
    if(iconSpan.innerHTML == ""){
      document.getElementById("sidebar").style.display = "none";
      iconSpan.innerHTML = userIcon;
    }
    else{
      document.getElementById("sidebar").style.display = "block";
      iconSpan.innerHTML = "";
    }
  }


  //----------------------------------------------Sidebar Tab Switcher----------------------------------------------//

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
        // Enabling page load animation under the navigation bar
        document.getElementById("loading-page").style.display = "block";
        
        let fileName;
        
        switch(newTabName) {
            case 'Exams': fileName = 'exams.php';
            break;
            case 'My Tests': fileName = 'tests.php';
            break;
            //case 'Stats': fileName = 'stats.php';
            case 'Stats': fileName = 'exam-pack.php';
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
                        // Loading the partial into the page.
                        $('#user-dashboard-partial').html(data)
                        // Hiding the page loading animation under the navigation bar
                        $('#loading-page').hide();
                    },
                dataType: 'html'
                });
        });
    }

    //----------------------------------------------Sidebar Tab Switcher----------------------------------------------//