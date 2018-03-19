import axios from 'axios';
import $ = require('jquery');

class GalleryView {

    constructor() {
        this.initGallery();
    }

    initGallery() {
        $('.active-pictures').on('click', '.prepend-btn', this.prependPic);
        $('.active-pictures').on('click', '.append-btn', this.appendPic);
        $('.gallery-order').on('click', '.remove-btn', this.removePic);
        $('.submit-order-btn').on('click', function() {
            $('.gallery-order-form').submit();
        })
    }

    getPictureDiv = (name: string, id: string) => {
        return `
        <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <img class="img-responsive" style="width:150px;height:150px;" src="/storage//carousel/` + name + `" alt="">
            </div>
            <div class="cut-text panel-footer">` + name + `</div>
            <button style="white-space:normal;" data-id="` + id + `" data-picture="` + name + `" class="remove-btn btn btn-danger m-a-1">Отстрани</button>                        
        </div>
    </div>
        `
    }

    getPictureInputField = (name: string, id: string) => {
        return `
        <input id="`+ id + `" type="text" name="order[]" value="` + name + `">   
        `
    }

    getPicAvailableDiv = (name: string, id: string) => {
        return `
        <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <img class="img-responsive" style="width:150px;height:150px;" src="/storage//carousel/`+ name + `" alt="">
            </div>
            <div class="cut-text panel-footer">` + name + `</div>
            <button style="white-space:normal;" data-id="`+ id + `" data-picture="` + name + `" class="prepend-btn btn btn-primary m-a-1">Додади напред</button>
            <button style="white-space:normal;" data-id="`+ id + `" data-picture="` + name + `" class="append-btn btn btn-success m-a-1">Додади позади</button>
        </div>
    </div>
        `
    }

    prependPic = (e: JQuery.Event) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        let id = button.dataset['id'] as string;
        $('.gallery-order').prepend(this.getPictureDiv(picture, id));
        $('.gallery-order-form').prepend(this.getPictureInputField(picture, id));
        $(button).parent().parent().hide();
    }

    appendPic = (e: JQuery.Event) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        let id = button.dataset['id'] as string;
        $('.gallery-order').append(this.getPictureDiv(picture, id));
        $('.gallery-order-form').append(this.getPictureInputField(picture, id));
        $(button).parent().parent().hide();
    }

    removePic = (e: JQuery.Event) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        let id = button.dataset['id'] as string;
        $('.active-pictures').append(this.getPicAvailableDiv(picture, id));
        $(button).parent().parent().hide();
        $('#' + id).remove();
    }

}

export default GalleryView;