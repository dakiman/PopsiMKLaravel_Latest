require('bootstrap');
import Popper from 'popper.js/dist/umd/popper.js';
window.Popper = Popper;
global.$ = global.jQuery = require('jquery');

require('owl.carousel2')
require('./src/home')
