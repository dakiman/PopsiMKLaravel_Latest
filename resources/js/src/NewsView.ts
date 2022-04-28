import axios from 'axios';
import $ = require('jquery');

class NewsView {

    item: string = '';

    constructor() {
        this.initNews();
    }

    initNews() {
        $('.active-check').on('click', this.activateitem);
        $('.btn-delete').on('click', this.prepItem)
        $('#btn-confirm').on('click', this.deleteItem)
    }

    activateitem = (e: JQuery.TriggeredEvent) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/admin/news/' + id)
            .catch((error) => console.log(error));
    }

    prepItem = (e: JQuery.TriggeredEvent) => {
        let btn = e.currentTarget as HTMLButtonElement
        this.item = btn.dataset['id'] as string;
    }
    deleteItem = () => {
        axios.post('/admin/news/delete/' + this.item)
            .then(result => {
                $('.' + this.item).hide();
            })
            .catch(error => console.log(error))
    }
}

export default NewsView;
