import axios from 'axios';
import $ = require('jquery');

class HomeView {

    constructor() {
        this.initHome();
    }

    initHome() {
        $('.list-group-item').on('click', this.displayItems);
    }

    displayItems = (e:JQuery.TriggeredEvent) => {
        let currentCard = e.currentTarget as HTMLDivElement;
        let itemsToShow = '.' + currentCard.dataset['target'];
        if(!$(currentCard).hasClass('active-category')){
            $('.active-category').removeClass('active-category');
            $(currentCard).addClass('active-category');

            $('.active-items').hide();
            $('.active-items').removeClass('active-items');
            $(itemsToShow).show();
            $(itemsToShow).addClass('active-items');
        }
    }

}

export default HomeView;
