let popupBg = document.querySelector(".popup__bg");
let popupBgMessage = document.querySelector(".popup__bg_message");
let popup = document.querySelector(".popup");
let popupMessage = document.querySelector(".popup-message");
let authLinks = document.querySelectorAll(".open-popup");
let closePopupButton = document.querySelector(".close-popup");
let closeMessagePopupButton = document.querySelector(".close-message");
let messageLink = document.querySelector(".open-message");

authLinks.forEach((authLink) => {
  authLink.addEventListener("click", (e) => {
    if (e.target == messageLink) {
      popupBgMessage.classList.add("active");
      popupMessage.classList.add("active");
      document.body.classList.add("lock");
    } else {
      popupBg.classList.add("active");
      popup.classList.add("active");
      document.body.classList.add("lock");
    }
  });
});

closePopupButton.addEventListener("click", () => {
  popupBg.classList.remove("active");
  popup.classList.remove("active");
  document.body.classList.remove("lock");
});
closeMessagePopupButton.addEventListener("click", () => {
  popupBgMessage.classList.remove("active");
  popupMessage.classList.remove("active");
  document.body.classList.remove("lock");
});

document.addEventListener("click", (e) => {
  if (e.target === popupBg) {
    popupBg.classList.remove("active");
    popup.classList.remove("active");
    document.body.classList.remove("lock");
  } else if (e.target === popupBgMessage) {
    popupBgMessage.classList.remove("active");
    popupMessage.classList.remove("active");
    document.body.classList.remove("lock");
  }
});
