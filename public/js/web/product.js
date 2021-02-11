const itemsMiniProduct = document.querySelectorAll(".item-mini-product");
const itemProduct = document.querySelector(".item-product");
const itemModalProduct = document.querySelector(".item-modal-product");

function handleGalleryProduct() {
    itemProduct.src = this.src;
    itemModalProduct.src = this.src;
    [...itemsMiniProduct].map(item => {
        if (item.src !== this.src) {
            item.classList.remove("is-active");
        }
    });
    this.classList.add("is-active");
}

itemsMiniProduct.forEach(item =>
    item.addEventListener("click", handleGalleryProduct)
);

const modalImage = document.querySelector(".modal");
const modalCloses = document.querySelectorAll(".close-modal");
const modalOpen = document.querySelector(".open-modal");

function handleModal() {
    if (modalImage.classList.contains("is-active")) {
        modalImage.classList.remove("is-active");
        return;
    }
    modalImage.classList.add("is-active");
}

modalOpen.addEventListener("click", handleModal);
modalCloses.forEach(button => button.addEventListener("click", handleModal));

document.querySelectorAll("#tab li").forEach(function(tabElement) {
    tabElement.onclick = function() {
        toggleTab(this.id, this.dataset.target);
    };
});

function toggleTab(selectedNav, targetId) {
    const tabElements = document.querySelectorAll("#tab li");

    tabElements.forEach(function(tabElement) {
        if (tabElement.id == selectedNav) {
            tabElement.classList.add("is-active");
        } else {
            if (tabElement.classList.contains("is-active")) {
                tabElement.classList.remove("is-active");
            }
        }
    });

    setMainTab(targetId);
}

function setMainTab(id) {
    const tabs = document.querySelectorAll(".tab-pane");
    tabs.forEach(function(tab) {
        if (tab.id === id) {
            tab.style.display = "block";
        } else {
            tab.style.display = "none";
        }
    });
}

setMainTab("pane-1");
