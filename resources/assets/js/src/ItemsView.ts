import axios from 'axios';
import $ = require('jquery');

class ItemsView {

    fileInput:string = '<input class="form-control m-b-3" type="file" name="cat_img[]" id="cat_img" >';
    constructor() {
        this.initItems();
    }


    initItems() {
        $('.active-check').on('click', this.activateItem);
        $('#selector').on('change', this.getItems);
        $('.pic-btn').on('click', this.addPictureField);
    }

    activateItem = (e:JQuery.Event) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/api/item/' + id)
        .then((result)=> {console.log(result)})
        .catch((error)=>console.log(error));
    }

    getItems = (e:JQuery.Event) => {
        let select = e.currentTarget as HTMLSelectElement;
        window.location.replace('/admin/items?cat=' + $(select).val());
    }    

    addPictureField = () => {
        $('#append-helper').append(this.fileInput);
    }
    
}

export default ItemsView;