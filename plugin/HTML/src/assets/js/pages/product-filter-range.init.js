
/*
Template Name: Dason - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Property list filter init js
*/


var slider = document.getElementById('priceslider');

noUiSlider.create(slider, {
    start: [250, 800],
    connect: true,
    tooltips: true,
    range: {
        'min': 0,
        'max': 1000
    },
    pips: {mode: 'count', values: 5}
});

