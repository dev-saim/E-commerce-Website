let searchIcon = document.querySelector('.temp1');
let searchForm = document.querySelector('.search-form');
let sidebar = document.querySelector('.side-bar');

searchIcon.onclick = () =>{
  searchForm.classList.toggle('active');
}

window.onscroll = () =>{
 
  searchForm.classList.remove('active');
  sidebar.classList.remove('active');
}

window.onresize = () =>{
    searchForm.classList.remove('active');
    sidebar.classList.remove('active');
    
} 



