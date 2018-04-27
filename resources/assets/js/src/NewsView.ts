import axios from 'axios';
import $ = require('jquery');

class NewsView {

    item:string = '';
    constructor() {
        this.initNews();
    }

    initNews() {
        $('.active-check').on('click', this.activateitem);
        $('.btn-delete').on('click', this.prepItem)
        $('#btn-confirm').on('click', this.deleteItem)
    }

    activateitem = (e:JQuery.Event) => {
        let checker = e.currentTarget as HTMLInputElement;
        let id = $(checker).attr('id');
        axios.post('/api/news/' + id)
        .then((result)=> {})
        .catch((error)=>console.log(error));
    }
    
    prepItem = (e:JQuery.Event) =>  {
        let btn = e.currentTarget as HTMLButtonElement
        this.item = btn.dataset['id'] as string;
    }
    deleteItem = () => {
        axios.post('/api/news/delete/' + this.item)
        .then(result => {
            console.log(result)
            $('.' + this.item).hide();
        })
        .catch(error => console.log(error))
    }
}

export default NewsView;