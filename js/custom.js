
// Active Class Example

let menuLinks = document.querySelectorAll('.main-menu li a');
for (let i = 0; i < menuLinks.length; i++) {
    menuLinks[i].addEventListener('click', activeAnchor);
}


function activeAnchor()
{
    for (let i = 0; i < menuLinks.length; i++)
    {
        menuLinks[i].classList.remove('active-link');
    }
    this.classList.add('active-link'); 
}

// one click 

function onclick1(){
    document.getElementById("para").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis esse, repudiandae voluptatem totam omnis aliquam illo quaerat, natus voluptate, nulla, in unde iusto cum temporibus. Distinctio consectetur debitis nemo quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime perferendis optio incidunt in. Illum impedit dolore omnis vel excepturi aliquam ex non odit, quisquam, exercitationem voluptatum eius error quaerat neque?";
}

// Double click 

function Dbclick2(){
    document.getElementById("para").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis mollitia maxime neque deserunt quisquam blanditiis.";
}

// on mouse out

var h=document.getElementById("hh");
h.onmouseout=function()
{
    document.getElementsByClassName("hidden")[0].innerHTML="Contact with Us..";
}

// on mouse move

var a=document.getElementById("hh");
a.onmousemove=function()
{
    document.getElementsByClassName("hidden")[0].innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem sequi natus eveniet suscipit odit provident dolores facere iste laudantium ullam quos similique, fugiat molestias itaque harum.";
}


// Find elments

console.log(document.title);
console.log(document.images.length);
console.log(document.images[0].src);
console.log(document.form);
console.log(document.body);
console.log(document.anchors);
console.log(document.links);



