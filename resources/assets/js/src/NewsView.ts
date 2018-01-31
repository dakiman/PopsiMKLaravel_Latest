import axios from 'axios';
import $ = require('jquery');

class NewsView {

    constructor() {
        this.initNews();
    }

    initNews() {
        $('.active-check').on('click', this.activateitem);
    }

    activateitem = (e:JQuery.Event) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/api/news/' + id)
        .then((result)=> {})
        .catch((error)=>console.log(error));
    }
    
}

export default NewsView;