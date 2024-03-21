

// const love = document.querySelector('#love');

// love.addEventListener('click',()=>{
//     love.style.color = 'red';
//     love.backgroundColor = 'red';
// })





// --------------------------------Tour Information---------------------------


const hellow1 = document.querySelector('.aai-load1');
const hellow2 = document.querySelector('.aai-load2');
const hellow3 = document.querySelector('.aai-load3');


const divh1 =  document.querySelector('.inclusions');
const divh2 =  document.querySelector('.Exclusions');
const divh3 =  document.querySelector('.preparations');



hellow1.addEventListener('click', ()=>{
    divh1.style.display = 'block';
    divh2.style.display = 'none';
    divh3.style.display = 'none';

    hellow1.style.backgroundColor = 'rgb(84, 84, 202)';
    hellow2.style.backgroundColor = 'white';
    hellow3.style.backgroundColor = 'white';

    hellow1.style.color = 'white';
    hellow2.style.color = 'rgb(84, 84, 202)';
    hellow3.style.color = 'rgb(84, 84, 202)';
})





hellow2.addEventListener('click', ()=>{
    divh2.style.display = 'block';
    divh1.style.display = 'none';
    divh3.style.display = 'none';

    hellow2.style.backgroundColor = 'rgb(84, 84, 202)';
    hellow1.style.backgroundColor = 'white';
    hellow3.style.backgroundColor = 'white';

    hellow2.style.color = 'white';
    hellow1.style.color = 'rgb(84, 84, 202)';
    hellow3.style.color = 'rgb(84, 84, 202)';
})





hellow3.addEventListener('click', ()=>{
    divh3.style.display = 'block';
    divh2.style.display = 'none';
    divh1.style.display = 'none';

    hellow3.style.backgroundColor = 'rgb(84, 84, 202)';
    hellow2.style.backgroundColor = 'white';
    hellow1.style.backgroundColor = 'white';

    hellow3.style.color = 'white';
    hellow2.style.color = 'rgb(84, 84, 202)';
    hellow1.style.color = 'rgb(84, 84, 202)';
})


// -------------------------tour clientInformation ------------------------------

// ---------------------- Upgrade Available---------------------------

const btnsd1 = document.querySelector('.Flight');
const btnsd2 = document.querySelector('.prime');

const divmd1 = document.querySelector('.tp1');
const divmd2 = document.querySelector('.tp2');

btnsd1.addEventListener('click', () => {

    divmd1.style.display = 'block';
    divmd2.style.display = 'none';

    btnsd1.style.backgroundColor = 'rgb(99, 99, 222)';
    btnsd2.style.backgroundColor = 'white';

    btnsd1.style.color = 'white';
    btnsd2.style.color = 'rgb(99, 99, 222)';
})



btnsd2.addEventListener('click', () => {

    divmd2.style.display = 'block';
    divmd1.style.display = 'none';

    btnsd2.style.backgroundColor = 'rgb(99, 99, 222)';
    btnsd1.style.backgroundColor = 'white';

    btnsd2.style.color = 'white';
    btnsd1.style.color = 'rgb(99, 99, 222)';
})