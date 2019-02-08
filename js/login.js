
document.querySelector("#tikla").addEventListener("click" ,animate);
let loginGrid=document.querySelector(".login-block");


function animate(){

  animateCss(".login-block","fadeInDown");
  loginGrid.addEventListener("animationstart",loginGrid.classList.toggle("active"));


}

document.querySelector("#close").addEventListener("click",close);
function close(){
  animateCss(".login-block","fadeOutDown",function () {
    loginGrid.addEventListener("animationstart",loginGrid.classList.toggle("active"));  });

}


function animateCss(element, animationName, callback) {
    const node = document.querySelector(element);
    node.classList.add('animated', animationName);

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName);
        node.removeEventListener('animationend', handleAnimationEnd);

        if (typeof callback === 'function') callback();
    }

    node.addEventListener('animationend', handleAnimationEnd);
}