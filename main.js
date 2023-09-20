var courses = Array.prototype.slice.call(document.getElementsByClassName("categorie"))

console.log(courses)

function testFunction(elt) {
    return function () {
        console.log("ok")
        console.log(elt.children[2].classList)
        var classes = [...elt.children[2].classList]
        var panel = elt.parentNode.children[1];
        console.log(panel)
        if (classes.includes('arrow--opened')) {
            elt.children[2].classList.add("arrow--closed")
            elt.children[2].classList.remove("arrow--opened")
            panel.classList.add("panel--closed")
            panel.classList.remove("panel--opened")
        } else {
            elt.children[2].classList.remove("arrow--closed")
            elt.children[2].classList.add("arrow--opened")
            panel.classList.remove("panel--closed")
            panel.classList.add("panel--opened")
        }
    };

};

courses.forEach(element => {
    element.addEventListener("click", testFunction(element), false);
    console.log(element)
});

