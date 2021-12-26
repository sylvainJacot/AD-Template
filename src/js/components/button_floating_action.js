
const buttonFloatingAction = () => {
document.addEventListener('DOMContentLoaded', function () {
    let buttonfaDefault = document.querySelectorAll(".js-buttonfa_default"); 
    let buttonfaSocial = document.querySelectorAll(".js-buttonfa_social"); 

    buttonfaDefault.forEach((item) => {
    
        item.onanimationend = () => {
            item.classList.remove('buttonfa_default-hover'); 
        };
        item.addEventListener("mouseover", function(){
            item.classList.add('buttonfa_default-hover');
        });
    
    })    


    buttonfaSocial.forEach((item) => {
    
        item.onanimationend = () => {
            item.classList.remove('buttonfa_social-hover'); 
        };
        item.addEventListener("mouseover", function(){
            item.classList.add('buttonfa_social-hover');
        });
    
    })
});

}
export default buttonFloatingAction;