var settingsmenu = document.querySelector(".settings-header")
var darkBtn = document.getElementById("dark-btn");
function settingsMenuToggle(){
    settingsmenu.classList.toggle("settings-header-height")
}
darkBtn.onclick = function(){
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");
}