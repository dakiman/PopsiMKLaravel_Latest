import axios from 'axios';
import $ = require('jquery');

class CategoriesView {

    item:string = '';
    constructor() {
        this.initCategories();
    }

    initCategories() {
        $('.active-check').on('click', this.activateitem);
        $('.btn-delete').on('click', this.prepItem)
        $('#btn-confirm').on('click', this.deleteItem)
    }

    activateitem = (e:JQuery.TriggeredEvent) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/api/category/' + id)
        .then((result)=> {})
        .catch((error)=>console.log(error));
    }

    prepItem = (e:JQuery.TriggeredEvent) =>  {
        let btn = e.currentTarget as HTMLButtonElement
        this.item = btn.dataset['id'] as string;
    }
    deleteItem = () => {
        axios.post('/api/category/delete/' + this.item)
        .then(result => {
            console.log(result)
            $('.' + this.item).hide();
        })
        .catch(error => console.log(error))
    }


}

export default CategoriesView;
