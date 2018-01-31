import axios from 'axios';
import $ = require('jquery');

class HomeView {

    constructor() {
        this.initHome();
    }

    initHome() {
        $('.category-card').on('click', this.displayItems);
    }
    
    displayItems = (e:JQuery.Event) => {
        let currentCard = e.currentTarget as HTMLDivElement;
        let itemsToShow = '.' + currentCard.dataset['target'];
        if(!$(currentCard).hasClass('active-category')){
            $('.active-category').removeClass('active-category');
            $(currentCard).addClass('active-category');
            $('.active-items').addClass('inactive-items');
            $('.active-items').removeClass('active-items');
            $(itemsToShow).removeClass('inactive-items');
            $(itemsToShow).addClass('active-items');
            console.log(itemsToShow);
        } else {
        }
    }
    
}

export default HomeView;