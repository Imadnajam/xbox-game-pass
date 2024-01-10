const activeClass = 'active';
const previewClass = 'preview';
const buttons = document.querySelectorAll('.preview-element');
let activeId = null;
let timer = startTimer();

buttons.forEach((button) => {
    button.addEventListener('click', ($event) => select($event.target.dataset.slide));
});

function startTimer() {
    return setInterval(() => {
        const nextButton = getActiveButton().nextElementSibling || document.querySelector('.preview-element');
        if (nextButton) {
            select(nextButton.dataset.slide);
        }
    }, 5000);
}

function select(slideId) {
    if (activeId === slideId) {
        return;
    }
    activeId = slideId;
    console.log('Selected Slide:', slideId);
    removeActiveSlide();
    setNextSlidePreview(slideId);
    removeActiveButton();
    addActiveButton(slideId);
    clearInterval(timer);
    timer = startTimer();
}

function setActiveSlide(id) {
    const activeSlide = document.querySelector(`#slider-${id}`);
    if (activeSlide) {
        activeSlide.classList.add(activeClass);
        console.log('Set Active Slide:', id);
    }
}

function removeActiveSlide() {
    const activeSlide = document.querySelector('.slider-content.active');
    if (activeSlide) {
        activeSlide.classList.remove(activeClass);
        console.log('Removed Active Slide');
    }
}

function setNextSlidePreview(id) {
    const preview = document.querySelector(`#slider-${id}`);
    if (preview) {
        preview.classList.add(previewClass);
        setTimeout(() => {
            setActiveSlide(id);
            preview.classList.remove(previewClass);
        }, 250);
        console.log('Set Next Slide Preview:', id);
    }
}

function addActiveButton(id) {
    const activeButton = document.querySelector(`[data-slide="${id}"]`);
    if (activeButton) {
        activeButton.classList.add(activeClass);
        console.log('Added Active Button:', id);
    }
}

function getActiveButton() {
    return document.querySelector('.preview-element.active');
}

function removeActiveButton() {
    const activeButton = getActiveButton();
    if (activeButton) {
        activeButton.classList.remove(activeClass);
        console.log('Removed Active Button');
    }
}
