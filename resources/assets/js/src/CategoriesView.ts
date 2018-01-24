import axios from 'axios';
import $ = require('jquery');

class CategoriesView {

    constructor() {
        this.initCategories();
    }

    initCategories() {
        $('.active-check').on('click', this.activateitem);
    }

    activateitem = (e:JQuery.Event) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/api/category/' + id)
        .then((result)=> {})
        .catch((error)=>console.log(error));
    }
    
}

export default CategoriesView;