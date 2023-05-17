//Redirect to loginPage
function loginPage() {
    window.location.href="logIn.php";
}

async function getSearchResults(){
    //
    //
    var response = await fetch("search.php?q=cat");
    var data = await response.text();
    console.log(data);
    //
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

function search_animal(){
    let input = document.getElementById('mysearch').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals    ');
     for (i = 0; i < x.length; i++){
         if (!x[i].innerHTML.toLowerCase().includes(input)){
             x[i].style.display="none";
         }else{
             x[i].style.display="list-item";
         }
     }
}

function test(){
    document.getElementById('mysearch').value = '';
}