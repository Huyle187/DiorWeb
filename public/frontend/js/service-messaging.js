const pauseIcon = $(".service-messaging__activation-button > #pause-icon");
const playIcon = $(".service-messaging__activation-button > #play-icon");

pauseIcon.onclick = () => {
    pauseIcon.classList.remove("show");
    pauseIcon.classList.add("hide");

    playIcon.classList.add("show");
    playIcon.classList.remove("hide");
};

playIcon.onclick = () => {
    playIcon.classList.remove("show");
    playIcon.classList.add("hide");

    pauseIcon.classList.add("show");
    pauseIcon.classList.remove("hide");
};
