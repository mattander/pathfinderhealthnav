"use strict";
const axios = require('axios');

document.addEventListener('DOMContentLoaded', () => {
    const todayDate = new Date().getFullYear().toString();
    const copyDate = document.getElementById('copyrightDate');
    console.log(todayDate);
    copyDate.innerText = todayDate;
})