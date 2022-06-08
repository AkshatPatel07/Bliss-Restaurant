window.addEventListener("load", function(){
    // animation on scroll
    AOS.init();
})


// Hamburger Menu
const toggleButton = document.getElementById('toggle-button');
const naviList = document.getElementById('navi-List');

toggleButton.addEventListener('click', () => {
    naviList.classList.toggle('active');
});

// Food Menu

let previewContainer = document.querySelector('.food-preview-container');
let previewBox = previewContainer.querySelectorAll('.food-preview');

document.querySelectorAll('.food .slide').forEach(food =>{
   food.onclick = () =>{
      previewContainer.style.display = 'flex';
      let name = food.getAttribute('data-name');
      previewBox.forEach(preveiw =>{
         let target = preveiw.getAttribute('data-target');
         if(name == target){
            preveiw.classList.add('active');
         }
      });
   };
});

previewContainer.querySelector('#close-preview').onclick = () =>{
   previewContainer.style.display = 'none';
   previewBox.forEach(close =>{
      close.classList.remove('active');
   });
};

// Form

const email = document.getElementById('Email');
const phone = document.getElementById('Phone');
const submit = document.getElementById('submit');

function validatePhoneNumber(input_str) {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    return re.test(input_str);
}

function validateForm() {
    let Email = email.value;
    if (!Email.includes('@' || !Email.endsWith('.com') && Email.length > 0)) {
        alert("Email is not valid!!")
    }

    var phone = document.getElementById('Phone').value;
    if (!validatePhoneNumber(phone)) {
        alert("Phone Number not valid!!")
    }
}

submit.addEventListener('click', validateForm);



