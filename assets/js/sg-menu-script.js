const d = document;
d.addEventListener("DOMContentLoaded", ()=>{
    const $menu_wrapper = d.querySelector(".menu-wrapper");
    $menu_wrapper.querySelectorAll("li").forEach(li=>{
        li.querySelectorAll("a").forEach(enlace=>{
           //console.log(enlace.href.replace('http://localhost/01-prueba/transparencia/', ''));
           //La url que se está validando es temporal, hasta que migremos a produccion y trabajemos
           //con el protocolo https. Estas pruebas es en localhost
           if(enlace.href === "http://localhost/01-prueba/transparencia/portal-311-sobre-quejas-reclamaciones-sugerencias-y-denuncias/"){
               enlace.setAttribute("class", "portal-311")
               let $sub_menu_portal_311 = d.querySelector(".portal-311 + ul")
               $sub_menu_portal_311.style.marginTop = "-3.2rem";
           }
        })
    })
})