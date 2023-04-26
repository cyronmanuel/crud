
var  tl = new TimelineMax({onUpdate:updatePercentage});
const controller = new ScrollMagic.Controller();

tl.from("#pic1", 2, {duration: 2,
    rotation: 30,
    scaleY: 0,
    scaleX: 0,
    x:360,
    opacity: .9});
// tl .from("button", 10, {y:300,scaleX: 0,opacity: 0})  
tl.from("#pic2", 7, {y:300,opacity: 0});
tl.from("#pic3", 3, { x:-300, y:300 ,opacity: .0});
tl.from(".box ", 2, {backgroundColor: "red,green" ,opacity: 1});
// tl.from(".box ", 0, /* {css:{backgroundImage:'url(https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg)', */
// opacity: 0 ,y:-800,x:300}});
tl.from("blockquote ", 5, { y:400,  x:200 ,opacity: 0});
tl.to("blockquote ", 1, { y:200,  scaleY: 0, x:300 ,opacity: 0});
tl.from(".box", 1, {backgroundImage:"linear-gradient(to right, blue, #0f0)" ,opacity: 1});
tl.to(".box", 2, {backgroundImage:"linear-gradient(to left, blue, #0f0 , pink)",scaleX: 0,scaleY: 0, top:-430, opacity: 1});
tl.to("blockquote ", 5, { y:200,  scaleY: 0, x:300 ,opacity: 0});
tl.to(".box", 2, {backgroundImage:"linear-gradient(to left, blue, #0f0 , pink)",scaleX: 1,scaleY: 1, top:-430, opacity: 1});

const scene = new ScrollMagic.Scene({
    triggerElement: ".box",
    triggerHook: "onLeave",
    duration:"400%"
})
.setPin(".box")
.setTween(tl)
.addTo(controller);

function updatePercentage(){
    tl.progress();
    console.log(tl.progress());
}


