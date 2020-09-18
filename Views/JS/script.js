var Light = document.getElementById("TrafficLight");

var state = Light.dataset.state;

var timeout =parseInt(Light.dataset.timeout);

var reload = true;


if (reload) {
    setTimeout(function () {
        location = "index?action=nextLight";
    }, timeout);
}