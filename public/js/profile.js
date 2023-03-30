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
