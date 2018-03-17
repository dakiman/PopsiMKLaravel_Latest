import axios from 'axios';
import $ = require('jquery');

class GalleryView {

    constructor() {
        this.initGallery();
    }

    initGallery() {
        $('.prepend-btn').on('click', this.prependPic);
        $('.append-btn').on('click', this.appendPic);
    }

    getPictureDiv = (name: string) => {
        return `
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img style="width:150px;height:150px;" src="/storage//carousel/`+ name +`" alt="">
                </div>
                <div class="cut-text panel-footer">`+ name +`</div>
            </div>
        </div>
        `
    }

    getPictureInputField = (name: string) => {
        return `
        <input type="text" name="order[]" value="` + name + `">   
        `
    }

    prependPic = (e: JQuery.Event) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        $('.gallery-order').prepend(this.getPictureDiv(picture));
        $('.gallery-order-form').prepend(this.getPictureInputField(picture));
        $(button).parent().parent().hide();
    }

    appendPic = (e: JQuery.Event) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        $('.gallery-order').append(this.getPictureDiv(picture));
        $('.gallery-order-form').append(this.getPictureInputField(picture));        
        $(button).parent().parent().hide();
    }

}

export default GalleryView;