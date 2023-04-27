//Redirect to loginPage
function loginPage() {
    window.location.href="logIn.php";
}


/*
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdown() {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active')

}

function search(){
    const icon = document.querySelector('.icon' );
    const search = document.querySelector('.search');
    icon.onclick = function(){
        search.classList.toggle('active')
    }
}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.fas fa-user')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}