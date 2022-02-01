import axios from 'axios';
import $ = require('jquery');

class ItemsView {

    fileInput: string = '<input class="form-control m-b-3" type="file" name="cat_img[]" id="cat_img" >';
    item: string = '';

    constructor() {
        this.initItems();
    }


    initItems() {
        $('.active-check').on('click', this.activateItem);
        $('#selector').on('change', this.getItems);
        $('.pic-btn').on('click', this.addPictureField);
        $('.btn-delete').on('click', this.prepItem)
        $('#btn-confirm').on('click', this.deleteItem)
    }

    activateItem = (e: JQuery.TriggeredEvent) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/admin/item/' + id)
            .catch((error) => console.log(error));
    }

    getItems = (e: JQuery.TriggeredEvent) => {
        let select = e.currentTarget as HTMLSelectElement;
        window.location.replace('/admin/items?cat=' + $(select).val());
    }

    addPictureField = () => {
        $('#append-helper').append(this.fileInput);
    }

    prepItem = (e: JQuery.TriggeredEvent) => {
        let btn = e.currentTarget as HTMLButtonElement
        this.item = btn.dataset['id'] as string;
    }
    deleteItem = () => {
        axios.post('/admin/item/delete/' + this.item)
            .then(() => {
                $('.' + this.item).hide();
            })
            .catch(error => console.log(error))
    }
}

export default ItemsView;
