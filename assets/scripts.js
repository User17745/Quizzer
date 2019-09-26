function startLoading(id=""){
    let enableCssClass = "loading";
    let loadingBar;

    if(id == "")
        loadingBar = document.getElementsByTagName("progress")[0];
    else
        loadingBar = document.getElementById(id);

    loadingBar.classList.add(enableCssClass);
}