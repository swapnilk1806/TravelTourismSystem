<?php

require 'Router.php';

$router = new Router();
$router->get('/', function () {
    @include("views/main-page/index.php");
});

$router->post('/phonepay_payment/:am/:id', function () {
   include('views/booking/phonepay.php');
});

$router->get('/about', function () {
    @include("views/main-page/show.php");
});

$router->get('/sign-logo', function () {
    @include("views/login/logo.php");
});

$router->get('/forget-pass', function () {
    @include("views/login/forget.php");
});

$router->get('/sign', function () {
    @include("views/login/sign.php");
});

$router->get('/app/:tablename', function () {
    @include("views/main-page/allshow.php");
});


$router->get('/registration-bellow/:id/:tablename', function () {
    @include("views/booking/registration.php");
});

$router->get('/get-show-info/:id/hellow/:tablename', function () {
    @include("views/main-page/show.php");
});

$router->get('/contact_us', function () {
    @include("views/info/contact.php");
});

$router->post('/contact_us_d',function(){
    @include('views/info/contact_d.php');
});


$router->get('/enqure', function (){
   @include('views/info/enqure.php');
});

$router->post('/enqure_d',function(){
    include('views/info/enqure_d.php');
});

$router->post('/reg_d-hellow-info', function(){
    include('views/login/reg_d.php');
});


$router->post('/login_user_password',function(){
    include('views/login/login_d.php');
});

$router->post('/send_message',function(){
    include('views/login/send.php');
});

$router->get('/app',function(){
    include('views/main-page/allshow.php');
});

$router->get('/customized-holidays/:name',function(){
    include('views/main-page/customized.php');
});

$router->get('/login_page',function(){
   include('views/login/login_page.php'); 
});

$router->get('/log_out_acccount',function(){
   include('views/login/logout.php'); 
});

$router->get('/logo',function(){
      include('views/login/logo.php');
});


$router->get('/zone/:tablename', function(){
    include('views/main-page/zone_show_data.php');
});

$router->get('/cancle_records/', function(){
   include('views/login/process/cancle.php');
});


$router->post('/cancle_process_request', function(){
    //echo "kadam";
    include('views/login/process/cancle_request.php');
});

$router->get('/feed-back-send/:pname', function(){
     include('views/login/process/feedback.php');
}); 

$router->post('/data-insert-feedback/:pname', function(){
     include('views/login/process/feed-back_d.php');
});

$router->get('/read-more-rating', function(){
     include('views/main-page/Feedback.php');
});

$router->post('/location-search',function(){
     include('views/main-page/search.php');
});


$router->get('/service-info',function(){
      include('views/info/service.php');
});

$router->listen();
