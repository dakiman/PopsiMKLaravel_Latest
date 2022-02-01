require('bootstrap');
import Popper from 'popper.js/dist/umd/popper.js';
window.Popper = Popper;
global.$ = global.jQuery = require('jquery');

require('./template/owl')
require('./template/slick')
require('./template/accordions')
require('./template/custom')
