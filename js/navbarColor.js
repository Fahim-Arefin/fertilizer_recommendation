let uri = document.baseURI;
let slashIndex = uri.lastIndexOf('/');
let href = uri.slice(slashIndex + 1);
console.log(href);

let anchors = document.querySelectorAll('#menu li a');
for (let a of anchors) {
    if (a.getAttribute('href') === href) {
        a.classList.add('active');
    }
}
if (href === 'fertilizerResultPage.php') {
    anchors[1].classList.add('active');
}
if (href === 'registration.php') {
    anchors[6].classList.add('active');
}

