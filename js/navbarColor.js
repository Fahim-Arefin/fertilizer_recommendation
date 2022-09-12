let uri = document.baseURI;
let slashIndex = uri.lastIndexOf('/');
let href = uri.slice(slashIndex+1);
console.log(href);

let anchors = document.querySelectorAll('#menu li a');
for(let a of anchors){
    if(a.getAttribute('href')===href){
        a.classList.add('active');
    }
}
