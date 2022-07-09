<div class="js-cookie-consent cookie-consent">
    <div class="row ">
        <div class="col-md-4 col-sm-12 button-fixed">
            <div class="p-3 pb-4 bg-custom text-white">
                <div class="row">
                    <div class="offset-10 col-2 text-center">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true" class="text-white" style="font-size: 30px;">&times;</span>
                        </button>
                    </div>
                </div>
                <p class="text-white m-1">{!! trans('cookieConsent::texts.message') !!}</p>
                <button type="button" class="m-1 btn btn-primary w-100 js-cookie-consent-agree cookie-consent__agree">{{ trans('cookieConsent::texts.agree') }}</button>
                <p style="font-size: 10px;" class="text-light ml-1"><a href="{{Storage::url('documents/Privacy_Policy_Popsi.docx')}}">@lang('messages.cookie-policy')</a></p>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-custom{
        background-color:rgba(0, 0, 0, 0.85);
    }
    .button-fixed{
        bottom: 0;
        position: fixed;
        right: 0;
        border-radius: 4px;
    }
</style>

<script>
    let closeButton = document.querySelector('.close');

    closeButton.addEventListener("click", () => {
        console.log('hi')
        let cookieBanner = document.querySelector('.js-cookie-consent')
        cookieBanner.style.display = "none";
    })
</script>
