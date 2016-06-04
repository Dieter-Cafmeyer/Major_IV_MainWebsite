"use strict";

(() => {
  var button1 = document.querySelector('.button1');
  var button2 = document.querySelector('.button2');
  var button3 = document.querySelector('.button3');
  var subscription = document.querySelector('.subscription');

  const init = () => {
    button1.addEventListener("click", firstAbbo);
    button2.addEventListener("click", secondAbbo);
    button3.addEventListener("click", thirdAbbo);
  }

  const firstAbbo = (e) => {
    e.preventDefault();
    subscription.value = '50';
    window.scrollTo(0, 100000);
    return false;
  }

  const secondAbbo = (e) => {
    e.preventDefault();
    subscription.value = '200';
    window.scrollTo(0, 100000);
    return false;
  }

  const thirdAbbo = (e) => {
    e.preventDefault();
    subscription.value = '500';
    window.scrollTo(0, 100000);
    return false;
  }


  init();
})();





