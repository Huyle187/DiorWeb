function transformFromRightToLeft() {
    const serviceMessagingAnimated = $(".service-messaging-animated");

    serviceMessagingAnimated.style.transform = "translateX(0)";
    setTimeout(function () {
        serviceMessagingAnimated.style.transform = "translateX(30%)";
    }, 1000);
    setTimeout(function () {
        serviceMessagingAnimated.style.transform = "translateX(60%)";
    }, 2000);
    setTimeout(function () {
        serviceMessagingAnimated.style.transform = "translateX(90%)";
    }, 3000);
    setTimeout(function () {
        serviceMessagingAnimated.style.transform = "translateX(120%)";
    }, 4000);
}
transformFromRightToLeft();
setInterval(transformFromRightToLeft, 5000);
