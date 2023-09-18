let parallax_el = document.querySelectorAll(".parallax");
 let xValue = 700,
 yValue = 700;

 window.addEventListener("mousemove",(e)=>{
    xValue = e.clientX - (window.innerHeight / 2);
    yValue = e.clientY - (window.innerHeight / 2);
    parallax_el.forEach(el=>{
        let speedx= el.dataset.speedx;
        let speedy= el.dataset.speedy;
        el.style.transform = `translateX(calc( ${-xValue * speedx}px)) translateY(calc( ${yValue * speedy}px))`;
    })
 })



