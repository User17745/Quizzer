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




  //User Dashboard Sidebar Tab Switcher
  // const menuItems = document.getElementsByClassName("sidebar-menu-item");
  // for(let menuItem of menuItems)
  //     menuItem.addEventListener("click", changeTab);

  // function changeTab(e){
  //     let tabName = document.getElementsByClassName("sidebar-menu-item-text")[1].innerHTML.trim();
  //     let params = "tabName=" + tabName;
  //       console.log(params);
  //     let xhr = new XMLHttpRequest();
  //     xhr.open("POST", "./user/dashboard.php", true);
  //     xhr.setRequestHeader('content-type', 'Application/x-www-form-urlencoded');
  //     xhr.onload = function() {
  //       if(this.status == 200)
  //         console.log("AJAX Success");
  //     }
  //     xhr.send(params);
  // }