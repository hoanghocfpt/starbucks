
const constraints = {
    firstname: {
      presence: true,
      length: {
        minimum: 3,
        message: "Nhập tên của bạn"
      }
    },
    lastname: {
      presence: true,
      length: {
        minimum: 3,
        message: "Nhập họ của bạn"
      }
    },
    email: {
      presence: true,
      email: true,
      message: "Hãy điền địa chỉ email của bạn"
    },
    password: {
      presence: true,
      length: {
        minimum: 8,
        message: "phải có ít nhất 8 ký tự"
      },
      format: {
        pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])(?!.*\s).{8,}$/,
        message: "phải chứa ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt"
      }
    }
  };




var inputFirstName = document.querySelector('#firstname');
var inputLastName = document.querySelector('#lastname');
var inputEmail = document.querySelector('#email');
var inputPassword = document.querySelector('#password');
function checkInputText(nameInput,message){
  nameInput.addEventListener('focusout', function(){

    if(this.value === ''){
      document.querySelector(`.errorinput${this.name}`).innerHTML = `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${message}</span>
  </div>`;
    }else{
      document.querySelector(`.errorinput${this.name}`).innerHTML = ``;
    }
  })
  nameInput.addEventListener('input', function(){
    if(this.value === ''){
      document.querySelector(`.errorinput${this.name}`).innerHTML = `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${message}</span>
  </div>`;
    }else{
      document.querySelector(`.errorinput${this.name}`).innerHTML = ``;
    }
  })
}

function checkInputEmail(nameInput,message){
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  nameInput.addEventListener('focusout', function(){

    if(!emailPattern.test(nameInput.value)){
      document.querySelector(`.errorinput${this.name}`).innerHTML = `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${message}</span>
  </div>`;
    }else{
      document.querySelector(`.errorinput${this.name}`).innerHTML = ``;
    }
  })
  nameInput.addEventListener('input', function(){
    if(!emailPattern.test(nameInput.value)){
      document.querySelector(`.errorinput${this.name}`).innerHTML = `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${message}</span>
  </div>`;
    }else{
      document.querySelector(`.errorinput${this.name}`).innerHTML = ``;
    }
  })

}



function checkInputPassword(nameInput){
  password = {
    length: {
      minimum: 8,
      message: "phải có ít nhất 8 ký tự"
    },
    format: {
      pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*])(?!.*\s).{8,}$/,
      message: "phải chứa ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt"
    }
  }
  nameInput.addEventListener('focusout', function(){
    kq = ``;
   
    if(nameInput.value.length < password.length.minimum){
      kq += `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${password.length.message}</span>
      </div>`;
    }
    if(!password.format.pattern.test(nameInput.value)){
      kq += `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${password.format.message}</span>
      </div>`;
    }
    document.querySelector(`.errorinput${this.name}`).innerHTML = kq;
  })
  nameInput.addEventListener('input', function(){
    kq = ``;
    if(nameInput.value.length < password.length.minimum){
      kq += `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${password.length.message}</span>
      </div>`;
    }
    if(!password.format.pattern.test(nameInput.value)){
      kq += `<div class="fieldStatus_item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span>${password.format.message}</span>
      </div>`;
    }
    document.querySelector(`.errorinput${this.name}`).innerHTML = kq;
  })

}



checkInputText(inputFirstName,'Nhập tên của bạn');
checkInputText(inputLastName,'Nhập họ của bạn');
checkInputEmail(inputEmail,'Hãy điền địa chỉ email của bạn');
checkInputPassword(inputPassword);








function validFormSignup(){
  var result = false;
  if(checkInputText === true && checkInputText === true && checkInputEmail === true && checkInputPassword === true){
    result = true;
  }
return false;
}
var form = document.querySelector('form');