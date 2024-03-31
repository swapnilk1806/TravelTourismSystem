

const hellow_p = document.querySelector('.hewlloq-p');
const app_s = document.querySelector('.cont');

var on = 0;
hellow_p.addEventListener('click', function name(params) {
       if(on == 0){
        app_s.style.display = 'block';
        on = 1;
       }else{
          app_s.style.display = 'none';
          on = 0;
       }
});



const asd_p = document.querySelector('.load-tp-hellow');
const hw_cand = document.querySelector('.hw_cand');

var hellow = 0;
hw_cand.addEventListener('click', function name() {
    if(hellow == 0){
        asd_p.style.display = 'block';
        hellow = 1;
    }else{
        asd_p.style.display = 'none';
        hellow = 0;
    }
})