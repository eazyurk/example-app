window._ = require('lodash');

window.axios = require('axios');

try {

    window.$ = window.jQuery = require('jquery');

    require('select2');
    $('select').select2();

} catch (error) {
    console.log(error);
}

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
