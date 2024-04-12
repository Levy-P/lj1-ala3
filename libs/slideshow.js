const loading_bar = document.getElementsByClassName('loading')[0].getElementsByTagName('figure')[0];
const slides = document.getElementById('slides').children;
var slideshow_slide, slideshow_progress = 0;

renderSlide();

setInterval(() => {
    slideshow_progress++;

    if (slideshow_progress > 0) {
        if (slideshow_progress > 100) {
            slideshow_progress = 0;
            slideshow_slide++; slideshow_slide %= 3;
            loading_bar.style.width = '0%';
            renderSlide();
        } else {
            loading_bar.style.width = slideshow_progress + '%';
        }
    }
}, 60);

function toSlide(slide) {
    slide = Math.round(slide);
    slideshow_progress = -25;
    slideshow_slide = clamp(slide, 0, 2);
    loading_bar.style.width = '0%';
    renderSlide();
}

function renderSlide() {
    switch (slideshow_slide) {
        case 1:
            slides[0].style.borderColor = "var(--b2)";
            slides[1].style.borderColor = "var(--b1)";
            slides[2].style.borderColor = "var(--b2)";
            break;
        case 2:
            slides[0].style.borderColor = "var(--b2)";
            slides[1].style.borderColor = "var(--b2)";
            slides[2].style.borderColor = "var(--b1)";
            break; 
        default:
            slides[0].style.borderColor = "var(--b1)";
            slides[1].style.borderColor = "var(--b2)";
            slides[2].style.borderColor = "var(--b2)";
            slideshow_slide = 0;
            break;
    }
}