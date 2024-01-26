const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register_link');
const loginLink = document.querySelector('.login_link');

registerLink.onclick = () =>{
    wrapper.classList.add('active');
}

loginLink.onclick = () =>{
    wrapper.classList.remove('active');
}