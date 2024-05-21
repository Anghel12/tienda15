/* import './bootstrap'; */
import '../css/app.css';
import 'swiper/swiper-bundle.css';
import '../css/styles.css';

import SwiperCore, { Autoplay } from 'swiper/core';
SwiperCore.use([Autoplay]);
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

/* graficos ApexCharts */
import ApexCharts from 'apexcharts';
window.ApexCharts = ApexCharts;

/*
import Vue from 'vue';
 import MyComponent from './app.vue';

new Vue({
  el: '#app',
  components: {
    MyComponent
  }
}); */


/* alerts */
/* Echo.channel('channel-name')
    .listen('MyEvent', (event) => {
        console.log('Received a new event: ', event);
    });

Echo.private('private-channel')
    .listen('AnotherEvent', (event) => {
        console.log('Received a private event: ', event);
    });

Echo.join('presence-channel')
    .here((users) => {
        console.log('Here are the current users in the channel: ', users);
    })
    .joining((user) => {
        console.log('A new user has joined the channel: ', user);
    })
    .leaving((user) => {
        console.log('A user has left the channel: ', user);
    }); */

