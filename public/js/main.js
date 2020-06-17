window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    let navBar = document.querySelector('.navbar-nav'),
        navItem = document.querySelectorAll('.nav-item'),
        url = window.location.pathname;

    for (let i = 0; i < navItem.length; i++) {
        if (url === '/') {
            navItem[0].classList.add('active');
        }
        if (url.slice(0, 6) === '/about') {
            navItem[1].classList.add('active');
        }
        if (url.slice(0, 8) === '/service') {
            navItem[2].classList.add('active');
        }
        if (url.slice(0, 8) === '/product') {
            navItem[3].classList.add('active');
        }
        if (url.slice(0, 8) === '/contact') {
            navItem[4].classList.add('active');
        }
    }

    // scrolled-nav
    window.addEventListener('scroll', trackScroll);
    let scrolledNav = document.querySelector('.navigation');


    function trackScroll() {
        let scrolled = window.pageYOffset,
            coords = document.documentElement.clientHeight;

        if (scrolled > coords) {
            scrolledNav.classList.add('scrolled-nav');
        }
        if (scrolled < coords) {
            scrolledNav.classList.remove('scrolled-nav');
        }
    }

    // calculate
    // show-hide inputs
    let calcSize = document.querySelector('#size'),
        calcSizes = document.querySelector('.calculate-size'),
        calcValue = document.querySelector('.calculate-value'),
        btnCalc = document.querySelector('.calculate-btn'),
        deliveryBlock = document.querySelector('.delivery-block'),
        deliveryLength = document.querySelector('.delivery-length');

    let calculatedValue = document.querySelector('.calculated-value'),
        calculatedRubs = document.querySelector('.calculated-rubs'),
        calculatedDelivery = document.querySelector('.calculated-delivery'),
        calculatedTotal = document.querySelector('.calculated-total'),
        formValue = document.querySelector('#value'),
        formLength = document.querySelector('#length'),
        formWidth = document.querySelector('#width'),
        formHeight = document.querySelector('#height');
    let sumValue,
        sumRubs,
        sumDelivery,
        sumTotal;

    calcSize.addEventListener('change', function (event) {
        let target = event.target;
        if (target.value) {
            if (target.value == 1) {
                calcValue.classList.add('show-calc');
                calcValue.classList.remove('hide-calc');
                calcSizes.classList.add('hide-calc');
                calcSizes.classList.remove('show-calc');
                btnCalc.classList.add('show-calc');
                btnCalc.classList.remove('hide-calc');
                deliveryBlock.classList.add('show-calc');
                deliveryBlock.classList.remove('hide-calc');
                formLength.value = 0;
                formWidth.value = 0;
                formHeight.value = 0;
            }
            if (target.value == 2) {
                calcSizes.classList.add('show-calc');
                calcSizes.classList.remove('hide-calc');
                calcValue.classList.add('hide-calc');
                calcValue.classList.remove('show-calc');
                btnCalc.classList.add('show-calc');
                btnCalc.classList.remove('hide-calc');
                deliveryBlock.classList.add('show-calc');
                deliveryBlock.classList.remove('hide-calc');
                formValue.value = 0;
            }
        } else {
            calcValue.classList.add('hide-calc');
            calcValue.classList.remove('show-calc');
            calcSizes.classList.add('hide-calc');
            calcSizes.classList.remove('show-calc');
            btnCalc.classList.remove('show-calc');
            btnCalc.classList.add('hide-calc');
            deliveryBlock.classList.remove('show-calc');
            deliveryBlock.classList.add('hide-calc');
            formLength.value = 0;
            formWidth.value = 0;
            formHeight.value = 0;
            formValue.value = 0;
        }
    });
    let deliveryNeed = document.querySelector('#delivery');
    deliveryNeed.addEventListener('change', function (event) {
        let target = event.target;
        if (target.value) {
            if (target.value == 1) {
                deliveryLength.classList.add('show-calc');
                deliveryLength.classList.remove('hide-calc');
            }
            if (target.value == 0) {
                deliveryLength.classList.remove('show-calc');
                deliveryLength.classList.add('hide-calc');
            }
        }
    });

    // prices
    let all_prices = {
        100: {
            10: 2740,
            20: 2810,
            30: 2850,
            40: 3460
        },
        150: {
            10: 2960,
            20: 3000,
            30: 3050,
            40: 3700
        },
        200: {
            10: 3220,
            20: 3320,
            30: 3380,
            40: 4100
        },
        250: {
            10: 3460,
            20: 3560,
            30: 3660,
            40: 4350
        },
        300: {
            10: 3750,
            20: 3810,
            30: 3860,
            40: 4650
        },
        350: {
            10: 3950,
            20: 4000,
            30: 4050,
            40: 4900
        },
        400: {
            10: 4300,
            20: 4370,
            30: 4400,
            40: 0
        },
    };

    let delivery_prices = {
        15: 500,
        20: 600,
        25: 700
    };

    // choose MARK
    let chooseMark = document.querySelector('#mark'),
        chooseFluid = document.querySelector('#fluid'),
        sumPrice = 0;

    // choose delivery
    let chooseDelivery = document.querySelector('#delivery_var');

    // count price function
    function countPrise() {
        for (let mark in all_prices) {
            let mark_value = all_prices[mark];
            if (mark === chooseMark.value) {
                for (let fluid in mark_value) {
                    let fluid_value = mark_value[fluid];
                    if (fluid === chooseFluid.value) {
                        sumPrice = mark_value[fluid];
                    }
                }
            }
        }
        return sumPrice;
    }

    // calculated
    btnCalc.addEventListener('click', function () {
        if (chooseMark.value) {
            if (chooseFluid.value) {
                if (calcValue.classList.contains('show-calc')) {
                    sumValue = formValue.value;
                    sumPrice = countPrise();
                    sumRubs = sumValue * sumPrice;
                    if (deliveryNeed.value == 1) {
                        if (chooseDelivery.value == 15) {
                            sumDelivery = sumValue * 500
                        }
                        if (chooseDelivery.value == 20) {
                            sumDelivery = sumValue * 600
                        }
                        if (chooseDelivery.value == 25) {
                            sumDelivery = sumValue * 700
                        }
                    }
                    if (deliveryNeed.value == 0) {
                        sumDelivery = 0;
                    }
                    sumTotal = sumDelivery + sumRubs;
                }
                if (calcSizes.classList.contains('show-calc')) {
                    sumValue = formLength.value * formWidth.value * formHeight.value;
                    sumPrice = countPrise();
                    sumRubs = sumValue * sumPrice;
                    if (deliveryNeed.value == 1) {
                        if (chooseDelivery.value == 15) {
                            sumDelivery = sumValue * 500
                        }
                        if (chooseDelivery.value == 20) {
                            sumDelivery = sumValue * 600
                        }
                        if (chooseDelivery.value == 25) {
                            sumDelivery = sumValue * 700
                        }
                    }
                    if (deliveryNeed.value == 0) {
                        sumDelivery = 0;
                    }
                    sumTotal = sumDelivery + sumRubs;
                }
            }
        calculatedValue.innerHTML = sumValue.toLocaleString();
        calculatedRubs.innerHTML = sumRubs.toLocaleString();
        calculatedDelivery.innerHTML = sumDelivery.toLocaleString();
        calculatedTotal.innerHTML = sumTotal.toLocaleString();
        }
    });


});