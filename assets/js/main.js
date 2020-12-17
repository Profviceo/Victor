if(document.querySelector('header#mobile')){
    let toggle =  document.querySelector('div#toggle');
    let status = false;
    let header = document.querySelector('section#nav_modal');

    let OpenMobileNavigationMenu = function(){
            header.classList.toggle('fade');
            header.classList.toggle('d-none');
            header.classList.toggle('opacity');         
    }

    let navController =  function(e){
        if(e.target == header){
            OpenMobileNavigationMenu();
        }else{
            OpenMobileNavigationMenu();
        }
    }


    toggle.addEventListener('click', navController);
}

if(document.querySelector('header.desktop')){
    let header = document.querySelector('header.desktop');


    window.addEventListener('scroll', e => {
        if(window.pageYOffset != 0 ){
            // header.style.cssText = "background:white; color:#000014!important;";
            header.id = "desktop";
        }else{
            header.id= "";
        }
    });
}