const accordionToggle = () => {
if (document.readyState !== "loading") {
    ToggleAccordion();
    } else {
    document.addEventListener("DOMContentLoaded", function () {
        ToggleAccordion();
    });
    }
    
    
    function ToggleAccordion() {
    var element = document.querySelectorAll(".accordion");
    
    if (element){
        element.forEach(function (el) {
            let accordionTab = el.querySelector(".accordion_tab");
            accordionTab.addEventListener("click", function (event) {
                event.preventDefault;
                el.classList.toggle("accordion-active");
            })
        })
    }
}
}

export default accordionToggle;