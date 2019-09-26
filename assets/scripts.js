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