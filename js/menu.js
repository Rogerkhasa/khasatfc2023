function menutoggle(){
    var choix = document.getElementById('choix')
    choix.classList.toggle("menu")
}

var toggleimg = document.querySelector('.toggle')

toggleimg.addEventListener('click', menutoggle)