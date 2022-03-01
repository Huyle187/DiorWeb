const serviceMessagingAnimated = $(".service-messaging-animated");

setInterval(() => {
    serviceMessagingAnimated.style.transform = "translateX(0)";

    setTimeout(() => {
        serviceMessagingAnimated.style.transform = "translateX(30%)";
    }, 1000);

    setTimeout(() => {
        serviceMessagingAnimated.style.transform = "translateX(60%)";
    }, 2000);

    setTimeout(() => {
        serviceMessagingAnimated.style.transform = "translateX(90%)";
    }, 3000);

    setTimeout(() => {
        serviceMessagingAnimated.style.transform = "translateX(120%)";
    }, 4000);
}, 5000);
