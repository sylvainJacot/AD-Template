// Ce script sert à ajouter une span à l'intérieur des balises qui ont
// la class "js_add-span". Cela à appliquer le soulignement des textes
// au hover de ceux-ci

const addSpan = () => {

document.addEventListener('DOMContentLoaded', function () {

    Array.from(document.getElementsByClassName("js_add-span")).forEach(item => {
        const html = item.innerHTML;
        item.innerHTML = "<span class=span_underline>" + html + "</span>";
        
    });

    // Ci-dessous, on ajoute une div autour du select pour voir pouvoir ajouter un ::after (la flèche) + animation de la flèche

    Array.from(document.getElementsByClassName("frm_form_field")).forEach(item => {
        
        Array.from(item.getElementsByTagName("select")).forEach(selectItem => {
            
            const wrapper = wrapper || document.createElement('div');
            wrapper.classList.add("select-wrapper");
            selectItem.parentNode.appendChild(wrapper);
            wrapper.appendChild(selectItem);

            // wrapper.addEventListener("click", () => {
            //     if(wrapper.classList.contains("select-wrapper-active")) {
            //         wrapper.classList.remove("select-wrapper-active");
            //     } else {
            //         wrapper.classList.add("select-wrapper-active");
            //     }
            // })

        })

        
    });


});

}
export default addSpan;