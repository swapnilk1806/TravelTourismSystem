

const btn1s = document.querySelector('.btn1-i');
const btn2s = document.querySelector('.btn2-i');
const btn3s = document.querySelector('.btn3-i');
const btn4s = document.querySelector('.btn4-i');


const cl1 = document.querySelector('.click-1');
const cl2 = document.querySelector('.click-2');
const cl3 = document.querySelector('.click-3');
const cl4 = document.querySelector('.click-4');

cl2.style.display = 'none';
cl3.style.display = 'none';
cl4.style.display = 'none';

btn1s.addEventListener('click', function () {
    btn1s.style.color = 'white';
    btn1s.style.backgroundColor = 'rgb(27, 27, 100)';
    btn2s.style.color = 'rgb(27, 27, 100)';
    btn2s.style.backgroundColor = "white";
    btn3s.style.color = 'rgb(27, 27, 100)';
    btn3s.style.backgroundColor = "white";
    btn4s.style.color = 'rgb(27, 27, 100)';
    btn4s.style.backgroundColor = "white";
    console.log(' 1 helow');
    cl1.style.display = 'block';
    cl2.style.display = 'none';
    cl3.style.display = 'none';
    cl4.style.display = 'none';
})

btn2s.addEventListener('click', function () {
    btn2s.style.color = 'white';
    btn2s.style.backgroundColor = 'rgb(27, 27, 100)';
    btn1s.style.color = 'rgb(27, 27, 100)';
    btn1s.style.backgroundColor = "white";
    btn3s.style.color = 'rgb(27, 27, 100)';
    btn3s.style.backgroundColor = "white";
    btn4s.style.color = 'rgb(27, 27, 100)';
    btn4s.style.backgroundColor = "white";
    console.log('2 helow');
    cl2.style.display = 'block';
    cl1.style.display = 'none';
    cl3.style.display = 'none';
    cl4.style.display = 'none';
})


btn3s.addEventListener('click', function () {
    btn3s.style.color = 'white';
    btn3s.style.backgroundColor = 'rgb(27, 27, 100)';
    btn2s.style.color = 'rgb(27, 27, 100)';
    btn2s.style.backgroundColor = "white";
    btn1s.style.color = 'rgb(27, 27, 100)';
    btn1s.style.backgroundColor = "white";
    btn4s.style.color = 'rgb(27, 27, 100)';
    btn4s.style.backgroundColor = "white";
    cl3.style.display = 'block';
    cl1.style.display = 'none';
    cl2.style.display = 'none';
    cl4.style.display = 'none';
    console.log('3 helow');
})

btn4s.addEventListener('click', function () {
    btn4s.style.color = 'white';
    btn4s.style.backgroundColor = 'rgb(27, 27, 100)';
    btn2s.style.color = 'rgb(27, 27, 100)';
    btn2s.style.backgroundColor = "white";
    btn3s.style.color = 'rgb(27, 27, 100)';
    btn3s.style.backgroundColor = "white";
    btn1s.style.color = 'rgb(27, 27, 100)';
    btn1s.style.backgroundColor = "white";
    cl4.style.display = 'block';
    cl1.style.display = 'none';
    cl2.style.display = 'none';
    cl3.style.display = 'none';
    console.log('4 helow');
})



// ==============================================Headers ========================= 

const heade_parts = document.querySelector('.load-tp-hellow');
const app_sdk = document.querySelector('.customixed');

var on = 0;
app_sdk.addEventListener('click', function name(params) {
    if (on == 0) {
        console.log('on');
        heade_parts.style.display = 'block';
        on = 1;
    } else {
        console.log('off');
        heade_parts.style.display = 'none';
        on = 0;
    }
})

// 1 is true, 0 is false

