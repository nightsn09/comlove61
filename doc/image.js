var i = 0;
var images = [];
var slideTime = 3000; // 3 seconds

images[0] = '/img/com.png';
images[1] = '/img/com.png';
images[2] = '/img/com.png';

function changePicture() {
    document.body.style.backgroundImage = images[i];

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }

    setTimeout("changePicture()", slideTime);
}

window.onload = changePicture;