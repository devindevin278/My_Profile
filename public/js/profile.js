let section = document.querySelectorAll('section')
// console.log(section[0].offsetHeight)

let nav_item = document.querySelectorAll('.nav-link')
// console.log(section)
console.log(nav_item[0])

function activeLink(){
    nav_item.forEach((item) => item.classList.remove('active'));
    this.classList.add('active');
    // console.log('hi');
}

nav_item.forEach((item) => item.addEventListener('click',activeLink));


let position = window.scrollY + 200
console.log(position)

// popover start
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

let high_btn = document.getElementById('high_btn')
console.log(high_btn);

high_btn.onclick = function () {
    high_btn.setAttribute('data-bs-content', "")
}
// popover end

