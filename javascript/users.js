const searchBar = document.querySelector('.search input');
const searchBtn = document.querySelector('.search button');
const userList = document.querySelector('.user-list');

searchBtn.onclick =() => {
searchBar.classList.toggle('active');
searchBtn.classList.toggle('active');
searchBar.focus();
if (searchBar.classList.contains("active")){
  searchBar.value = "";
  searchBar.classList.remove("active'");
}
};

searchBar.onkeyup =() => {
  let searchTerm=searchBar.value;
  if (searchTerm !="") { 
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
             let data = xhr.response;
             console.log(data);
                userList.innerHTML = data;
          }
      }
    }
    xhr.setRequestHeader('Content-Type', "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
};

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
             let data = xhr.response;
             if(!searchBar.classList.contains("active")){
                userList.innerHTML = data;
             }
          }
      }
    }
    xhr.send();
},500);