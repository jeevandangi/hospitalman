const icons=document.querySelector('.hello');
icons.addEventListener('click',()=>{
    const dropdown=document.querySelector('.dropdown_admin');
    let active = dropdown.style.display !== 'block';
    if(active){
        dropdown.style.display='block'
    }
    else{
        dropdown.style.display='none'
    }
})