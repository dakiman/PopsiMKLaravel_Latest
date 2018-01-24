import axios from 'axios';
import $ = require('jquery');

class ItemsView {

    constructor() {
        this.initItems();
    }

    initItems() {
        $('.active-check').on('click', this.activateItem);
        $('#selector').on('change', this.getItems);
    }

    activateItem = (e:JQuery.Event) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/api/item/' + id)
        .then((result)=> {console.log(result)})
        .catch((error)=>console.log(error));
    }

    getItems = (e:JQuery.Event) => {
        console.log('yuh');
        let select = e.currentTarget as HTMLSelectElement;
        window.location.replace('/admin/items?cat=' + $(select).val());
    }    
    
}

export default ItemsView;