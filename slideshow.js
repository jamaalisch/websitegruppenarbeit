let index = 1;
console.error("INDEX: " + index);

function slide(number) {

    showSlider(index += number);
}

slide(1);

window.setInterval(() => {
    let slides = document.getElementsByClassName("slide");
        slide(1);
}, 2500)

function showSlider(number) {
    let i;
    let slides = document.getElementsByClassName("slide");

    if(number > slides.length) {
        index = 1;
    }

    if(number == 0) {
        index = 4;
    }

    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[index - 1].style.display = "block";

}