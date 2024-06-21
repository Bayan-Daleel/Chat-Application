const form = document.querySelector('.typing-area'),
inputFeild=form.querySelector('.input-field'),
sendBtn=form.querySelector('button'),
chatBox = document.querySelector('.chat-box');

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/typing-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
           inputFeild.value="";
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
};
    
chatBox.onmouseenter = ()=>{
    chatBox.classList.add('active');
}
    
chatBox.onmouleave = ()=>{
    chatBox.classList.remove('active');
}
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
             let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains('active')){
                scrollBottom();
                }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
},500);

function scrollBottom() {
   chatBox.scrollTop=chatBox.scrollHeight;
};