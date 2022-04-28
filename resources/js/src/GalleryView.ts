import axios from 'axios';
import $ = require('jquery');

class GalleryView {

    item: string = '';

    constructor() {
        this.initGallery();
    }

    initGallery() {
        $('.active-pictures').on('click', '.prepend-btn', this.prependPic);
        $('.active-pictures').on('click', '.append-btn', this.appendPic);
        $('.gallery-order').on('click', '.remove-btn', this.removePic);
        $('.submit-order-btn').on('click', function () {
            $('.gallery-order-form').submit();
        })
        $('.btn-delete').on('click', this.prepItem)
        $('#btn-confirm').on('click', this.deleteItem)
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
        <input id="` + id + `" type="text" name="order[]" value="` + name + `">
        `
    }

    getPicAvailableDiv = (name: string, id: string) => {
        return `
        <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <img class="img-responsive" style="width:150px;height:150px;" src="/storage//carousel/` + name + `" alt="">
            </div>
            <div class="cut-text panel-footer">` + name + `</div>
            <button style="white-space:normal;" data-id="` + id + `" data-picture="` + name + `" class="prepend-btn btn btn-primary m-a-1">Додади напред</button>
            <button style="white-space:normal;" data-id="` + id + `" data-picture="` + name + `" class="append-btn btn btn-success m-a-1">Додади позади</button>
            <button data-toggle="modal" data-target="#ticket-modal" data-id="{{$picture->id}}"
                style="white-space:normal;" class="btn btn-delete btn-danger m-a-1">Избриши
            </button>
        </div>
    </div>
        `
    }

    prependPic = (e: JQuery.TriggeredEvent) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        let id = button.dataset['id'] as string;
        $('.gallery-order').prepend(this.getPictureDiv(picture, id));
        $('.gallery-order-form').prepend(this.getPictureInputField(picture, id));
        $(button).parent().parent().hide();
    }

    appendPic = (e: JQuery.TriggeredEvent) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        let id = button.dataset['id'] as string;
        $('.gallery-order').append(this.getPictureDiv(picture, id));
        $('.gallery-order-form').append(this.getPictureInputField(picture, id));
        $(button).parent().parent().hide();
    }

    removePic = (e: JQuery.TriggeredEvent) => {
        let button = e.currentTarget as HTMLButtonElement;
        let picture = button.dataset['picture'] as string;
        let id = button.dataset['id'] as string;
        $('.active-pictures').append(this.getPicAvailableDiv(picture, id));
        $(button).parent().parent().hide();
        $('#' + id).remove();
    }

    prepItem = (e: JQuery.TriggeredEvent) => {
        let btn = e.currentTarget as HTMLButtonElement
        this.item = btn.dataset['id'] as string;
    }

    deleteItem = () => {
        axios.post('/admin/gallery/delete/' + this.item)
            .then(() => {
                $('.' + this.item).hide();
            })
            .catch(error => console.log(error))
    }

}

export default GalleryView;
