const form = document.querySelector('form');
const show = document.querySelector('.show ul');
const s = document.querySelector('.show');
form.addEventListener('submit',function(e){
    e.preventDefault();
    const fname = form.firstName.value;
    const lname = form.lastName.value;
    const country = form.country.value;
    const subject = form.subject.value;
    show.innerHTML = 
    `
    <li>Name : <span>${fname} ${lname}</span></li>
    <li>Country : <span>${country}</span></li>
    <li>Subject : <span>${subject}</span></li>
    `;
    s.classList.add('showd');
    form.reset();
});