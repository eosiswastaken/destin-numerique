var courses = Array.prototype.slice.call(document.getElementsByClassName("parcours"))

console.log(courses)

function testFunction(elt) {
    return function () {
        console.log("ok")
        console.log(elt.children[2].classList)
        var classes = [...elt.children[2].classList]
        if (classes.includes('arrow--opened')) {
            elt.children[2].classList.add("arrow--closed")
            elt.children[2].classList.remove("arrow--opened")
        } else {
            elt.children[2].classList.remove("arrow--closed")
            elt.children[2].classList.add("arrow--opened")
        }
    };

};

courses.forEach(element => {
    element.addEventListener("click", testFunction(element), false);
    console.log(element)
});