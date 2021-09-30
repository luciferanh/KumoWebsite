const navSlide=()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-middle');
    const navlinks=document.querySelectorAll('.nav-middle li');
  
    burger.addEventListener('click',()=>{
        //Toggle nav
        nav.classList.toggle('nav-active');
        //animata links
        navlinks.forEach((link,index)=>{
        if(link.style.animation){
                link.style.animation=``;
        }else{
        link.style.animation =`navLinkFade 0.5s ease forwards ${index /7+0.3}s`;
            } 
        });
        //buger animation
        burger.classList.toggle('toggle');
    });
    
    

   
}
navSlide();
